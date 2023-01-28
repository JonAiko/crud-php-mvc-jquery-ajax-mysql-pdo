CREATE DATABASE db_project;
use db_project;

CREATE TABLE users (
    id  INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(30) NOT NULL,
    apellidos VARCHAR (50) NOT NULL,
    email VARCHAR(60) NOT NULL
);