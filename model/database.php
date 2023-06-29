<?php

$password = "";
$user = "root";
$name_bd = "citas";

try {
    $db = new PDO("mysql:host=localhost; dbname=".$name_bd, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"set names utf8"));
} catch (Exception $e) {
    echo "problema en la conexión: ". $e->getmessage();
}

?>