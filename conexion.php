<?php
    
    $servername = 'localhost';
    $port = '3306';
    $username = 'root';
    $password = '';
    $database = 'bdperrona.sql';
    $tabla = 'usuario';

    $conexion = mysqli_connect($servername,$username, $password, $database);
        
    if(!$conexion){
        die("error de connection ".mysqli_connect_error());
    }

?>