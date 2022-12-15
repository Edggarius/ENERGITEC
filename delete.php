<?php

include("conexion1.php");
$con=conectar();

$email=$_GET['email'];

$sql="DELETE FROM usuario WHERE email='$email'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: edit.php");
    }
?>
