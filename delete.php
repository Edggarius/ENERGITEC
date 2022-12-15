<?php

require 'conexion1.php';

$id=$_GET['id'];

$sql="DELETE FROM usuario WHERE idUsuario='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: edit.php");
    }
?>
