<?php
require_once MODELS . 'User.php';
class pageController
{
    public function index()
    {
        
        require_once VIEWS.'user/index.php';
    }

    public function store()
    {
        $user = new User();
        $user->setNombre($_POST['nombre']);
        $user->setApellidos($_POST['apellidos']);
        $user->setEmail($_POST['email']);
        $save = $user->save();
        if($save)
        {
            echo json_encode(array('status' => 200));
        }else{
            echo json_encode(array('status' => 400));
        }
    }
    
    public function list()
    {
       echo  json_encode($data = utils::list('User','getAll'));
    }

    public function show()
    {
        echo json_encode($data = utils::find('User','find',$_POST['id']));
    }

    public function update()
    {
        $user = new User();
        $user->setNombre($_POST['nombre']);
        $user->setApellidos($_POST['apellidos']);
        $user->setEmail($_POST['email']);
        $save = $user->update($_POST['id']);
        if($save)
        {
            echo json_encode(array('status' => 200));
        }else{
            echo json_encode(array('status' => 400));
        }
    }

    public function destroy()
    {
        echo json_encode($data = utils::find('User','delete',$_POST['id']));
    }
}
