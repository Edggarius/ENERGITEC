<?php
    
    $servername = 'localhost';
    $port = '3309';
    $username = 'root';
    $password = '';
    $database = 'energitec';
    $tabla = 'datosp';

    $conexion = mysqli_connect($servername,$username, $password, $database);
        
    if(!$conexion){
        die("error de connection ".mysqli_connect_error());
    }

?>