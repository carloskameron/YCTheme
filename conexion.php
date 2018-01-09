<?php
$mysqli=new mysqli("localhost","yessica1_bd","yessica2017","yessica1_wp102");

if(mysqli_connect_errno()){
	
	echo "Fall? la conexi?n: ".mysqli_connect_error();
	exit();
}

?>