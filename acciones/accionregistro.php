<?php
include("../conexion/conect.php");

//variables
$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$user=$_POST["user"];
$pass=$_POST["pass"];
//insercion de sql
$sql="INSERT INTO usuarios (nombre,correo,nombre_usuario,pass)
VALUES('$nombre','$correo','$user','$pass')";
//qerito
$mysqli->query($sql);
?>
