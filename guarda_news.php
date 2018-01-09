<?php

include 'conexion.php';

$con=conexion();

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];

$res=mysql_query("insert into newsletter (nombre, correo) values('".$nombre."','".$correo."')",$con);

if($res){

echo "Ok";

}

}

?>

	