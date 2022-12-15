<?php

include("conexion1.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$email=$_POST['email'];
$RFC=$_POST['RFC'];
$Rol=$_POST['Rol'];
$contra =$_POST['contra'];


$sql="INSERT INTO usuario VALUES('$Nombre','$Apellidos','$email','$RFC','$Rol','$contra', '')";
$query= mysqli_query($con,$sql);

    if($query){
        Header("Location: edit.php");
    }
?>