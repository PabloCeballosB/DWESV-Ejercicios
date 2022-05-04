CREATE DATABASE gestion_minijuegos;

USE gestion_minijuegos;

CREATE TABLE minijuegos(
    idMinijuego tinyint unsigned AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre varchar(50) NOT NULL UNIQUE,
    icono varchar(100) NULL,
    ruta varchar(100) NOT NUll
);
