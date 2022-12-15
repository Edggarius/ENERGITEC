<?php
/*Datos de conexion a la base de datos*/

//$db_host = "localhost:3307"; //Cambiar el puerto...
$db_host = "localhost:3307";
$db_user = "root";
$db_pass = "";
$db_name = "energitec";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}

?>