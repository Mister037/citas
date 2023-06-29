<?php
    session_start();
    include "templates/header.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1>Registrarse</h1>
        <form action="validarRegister.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text"  name="nombre" placeholder="Ingrese el nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text"  name="apellido" placeholder="Ingrese el apellido" required>
            </div>
            <div class="form-group">
                <label for="id">Identificación</label>
                <input type="number"  name="txtidcliente" placeholder="Ingrese su identificación" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number"  name="edad" placeholder="Ingrese su edad" required>
            </div>
            <div class="form-group">
                <label for="id">Telefono</label>
                <input type="number"  name="telefono" placeholder="Ingrese su telefono" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" placeholder="Ingrese su E-mail" required value="<?php echo isset($_SESSION['email1']) ? $_SESSION['email1'] : ''; ?>">
            </div>

            <div class="form-group">
                <label for="user">Crear usuario</label>
                <input type="text"  name="createuser" placeholder="Crear usuario" required>
            </div>
            <div class="form-group">
                <label for="pass">Crear contraseña</label>
                <input type="password" name="password" placeholder="Crear contraseña" required>
            </div>
            <div class="form-group">
                <input type="submit" name="crear" value="Crear usuario">
            </div>
        </form>
    </div>

    <!--<div class="container">
    </div>-->
</body>
</html>


