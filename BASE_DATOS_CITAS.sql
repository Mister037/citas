CREATE DATABASE citas

GO
USE citas
GO

CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY IDENTITY,
	nombre VARCHAR(50),
    apellido VARCHAR(50),
    edad INT,
    telefono INT,
    identificacion INT PRIMARY KEY,
    email VARCHAR(50),
    usuario VARCHAR(15),
    contrasena VARCHAR(10))

CREATE TABLE Citas (ID INT PRIMARY KEY,
    usuarioID INT,
    fecha DATETIME,
	hora TIME,
	profesional NVARCHAR(50),
	especialidad NVARCHAR(50),
    descripcion VARCHAR(255),
    FOREIGN KEY (UsuarioID) REFERENCES clientes(identificacion));