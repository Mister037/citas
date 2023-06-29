<?php
    include_once('model/database.php');

    $usuario = $_POST["usuario"];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $doctor = $_POST['profesional'];
    $especialidad = $_POST['especialidad'];
    $correo = $_POST['correo'];

    if (empty($usuario) || empty($fecha) || empty($hora) || empty($doctor ) || empty($especialidad)|| empty($correo)){
        echo 'Registro exitoso';        
    }

    $consulta = "INSERT INTO citas (usuarioID, fecha, hora, profesional, especialidad, correo) VALUES (?,?,?,?,?,?)";
    $stmt = $db->prepare($consulta);
    #vincular parametros
    $stmt-> bindparam(1, $usuario);
    $stmt -> bindparam(2, $fecha);
    $stmt -> bindparam(3, $hora);
    $stmt -> bindparam(4, $doctor);
    $stmt -> bindparam(5, $especialidad);
    $stmt -> bindparam(6, $correo);

    
    if($stmt -> execute()){
        header("location: landing.php");
        exit;
    }else{
        echo 'error al reservar la cita';
        exit;
    }






    


?>