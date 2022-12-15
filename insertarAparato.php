<?php 
    $nombre = $_POST['nombre'];
    $foto = $_POST['foto'];
    $potencia = $_POST['potencia'];
    require 'DBManager.php';

    addAparato($nombre,$foto,$potencia);
    header('location:aparatos.php');
?>