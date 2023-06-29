<?php


include_once "model/database.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
session_start();

/*$varnombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$varapellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
$varedad = isset($_POST["edad"]) ? $_POST["edad"] : "";
$vartelefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
$varemail = isset($_POST["email"]) ? $_POST["email"] : "";
$varuser = isset($_POST["createuser"]) ? $_POST["createuser"] : "";
$varpass = isset($_POST["password"]) ? $_POST["password"] : "";
$varid = isset($_POST["txtidcliente"]) ? $_POST["txtidcliente"] : "";*/


$varnombre = $_POST['nombre'];
$varapellido = $_POST['apellido'];
$varedad = $_POST['edad'];
$vartelefono = $_POST['telefono'];
$varidcliene = $_POST['txtidcliente']; //es la identificacion.
$varemail = $_POST['email'];
$_SESSION['email1'] = $varemail;
$varcreateuser = $_POST['createuser'];
$varpass = $_POST['password'];



//consulta (organizar)
$consulta = "INSERT INTO clientes(nombre, apellido, edad, telefono, identificacion, email, usuario, contrasena) VALUES(?,?,?,?,?,?,?,?)";
//metodo 
$stmt = $db -> prepare($consulta);
#vincular parametros
$stmt -> bindParam(1, $varnombre);
$stmt -> bindParam(2, $varapellido);
$stmt -> bindParam(3, $varedad);
$stmt -> bindParam(4, $vartelefono);
$stmt -> bindParam(5, $varidcliene );
$stmt -> bindParam(6, $varemail );
$stmt -> bindParam(7, $varcreateuser );
$stmt -> bindParam(8, $varpass);

if($stmt -> execute()){
    header("location: login.php?mensaje=Registrado");
}else{
    header("location: index.php?mensaje=error");
}


}
?>
<?php
    include "templates/footer.php";
?>