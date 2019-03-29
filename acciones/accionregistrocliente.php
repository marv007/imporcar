<?php
include("../conexion/conect.php");

//variables
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
$pass=$_POST["pass"];
//insercion de sql
$sql="INSERT INTO clientes (nombre,apellido,direccion,telefono,pass_cliente,correo)
VALUES('$nombre','$apellido','$direccion','$telefono','$pass','$correo',)";
//qerito
$mysqli->query($sql);
echo "INSERT INTO clientes (nombre,apellido,direccion,telefono,pass_cliente,correo)
VALUES('$nombre','$apellido','$direccion','$telefono','$pass','$correo',)";
?>
