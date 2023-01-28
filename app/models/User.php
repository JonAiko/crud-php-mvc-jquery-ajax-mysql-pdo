<?php
class User
{
    private $nombre;
    private $apellidos;
    private $email;

    public function getNombre(){
		return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

    public function getAll()
    {
        try
        {
            $stmt  = database::connection()->prepare('SELECT * FROM users');
            if($stmt->execute())
            {
                return $stmt->fetchAll();
            }
            throw new Exception('Hubo un error al solicitar los datos');
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function save()
    {
        try
        {
            $stmt = database::connection()->prepare("INSERT INTO users (nombre,apellidos,email) VALUES (:nombre,:apellidos,:email)");
            $stmt->bindValue(':nombre',$this->getNombre(),PDO::PARAM_STR);
            $stmt->bindValue(':apellidos',$this->getApellidos(),PDO::PARAM_STR);
            $stmt->bindValue(':email',$this->getEmail(),PDO::PARAM_STR);
            $stmt->execute();
            return true;
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function find($id)
    {
        try
        {
            $stmt = database::connection()->prepare("SELECT * FROM users WHERE id=:id");
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchObject();
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function delete($id)
    {
        try
        {
            $stmt = database::connection()->prepare("DELETE FROM users WHERE id=:id");
            $stmt->bindValue(':id',$id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function update($id)
    {
        try
        {
            $stmt = database::connection()->prepare("UPDATE users SET nombre=:nombre , apellidos=:apellidos , email =:email WHERE id=:id ");
            $stmt->bindValue(':id',$id,PDO::PARAM_INT);
            $stmt->bindValue(':nombre',$this->getNombre(), PDO::PARAM_STR);
            $stmt->bindValue(':apellidos',$this->getApellidos(),PDO::PARAM_STR);
            $stmt->bindValue(':email', $this->getEmail(),PDO::PARAM_STR);
            $stmt->execute();
            return true;
        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }


}