<?php
session_start();
include "templates/header.php";

// Obtener el nombre de usuario del formulario de inicio de sesión
$usuario = $_POST["user"];
$pass = $_POST["pass"];
#treemos el alias username1
$_SESSION['username1'] = $usuario;

include_once "model/database.php";
$consulta = $db->prepare("SELECT * FROM clientes WHERE usuario=:usuario AND contrasena=:contrasena");
$consulta->bindParam(':usuario', $usuario);
$consulta->bindParam(':contrasena', $pass);
$consulta->execute();

$resultado = $consulta->fetch(PDO::FETCH_OBJ);

if ($resultado) {
    // Inicio de sesión exitoso
    // Realiza las acciones necesarias, como establecer una sesión o redirigir al usuario a otra página
    if ($usuario === "admin01" && $pass === "admin01*") {
        $_SESSION["esAdmin"] = true;
        header("Location: home.php");
        exit();
    } else {
        header("Location: registroCitas.php?mensaje=bienvenido");
        exit();
    }
} else {
    // Credenciales inválidas
    // Muestra un mensaje de error al usuario
    header("Location: login.php?mensaje=error");
    exit();
}



?>
