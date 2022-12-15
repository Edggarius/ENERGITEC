<?php

require 'conexion1.php';

$Nombre=$_POST['Nombre'];
$Apellidos=$_POST['Apellidos'];
$email=$_POST['email'];
$RFC=$_POST['RFC'];
$Rol=$_POST['Rol'];
$contra =$_POST['contra'];
$id = $_POST['id'];


$sql="UPDATE usuario SET Nombre='$Nombre',Apellidos='$Apellidos',email='$email',RFC='$RFC',Rol='$Rol',contra='$contra' WHERE idUsuario='$id'";
$query= mysqli_query($con,$sql);

    if($query){
        Header("Location: edit.php");
    }
?>