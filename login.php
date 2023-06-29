<?php

include "templates/header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<?php
            if(isset($_GET["mensaje"])and $_GET ["mensaje"] === "Registrado"){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Registrado!</strong> usuario creado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <?php
            }
            ?>
<?php
            if(isset($_GET["mensaje"])and $_GET ["mensaje"] === "error"){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Error!</strong> usuario y/o contraseña incorrecto.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
            <?php
            }
            ?>


<div class="login-container">
  <h2>Iniciar sesión</h2>
  <form class="login-form" action="validarLogin.php" method="post">
    <div class="form-group">
      <label for="username">Usuario</label>
      <input name="user" type="text" id="username" placeholder="Ingrese su usuario" required>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input name="pass" type="password" id="password" placeholder="Ingrese su contraseña" required>
    </div>
    <button name="iniciosesion" type="submit"> Iniciar sesión</button>
    <p class="register-link">¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
  </form>
</div>

<?php
    #include "templates/footer.php";
?>
