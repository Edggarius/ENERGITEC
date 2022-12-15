<?php 
    $edificio = $_POST['edificio'];
    $planta = $_POST['planta'];
    $descripcion = $_POST['descripcion'];
    require 'DBManager.php';

    addInterior($edificio,$planta,$descripcion);
    header('location:interior.php');
?>