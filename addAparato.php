<?php 
    require 'DBManager.php';
    $id_aparato = $_POST['id_aparato'];
    $aparato = json_decode(getAparato($id_aparato))[0];
    $nombre = $aparato->nombre;
    $cantidad = $_POST['cantidad'];
    $tiempo =$_POST['tiempo'];
    $consumo=getConsumo($aparato->potencia,$tiempo,$cantidad);
    // print_r($id_aparato);
    $id_espacio = $_POST['id_espacio'];
   
    addAparato($id_aparato,$id_espacio,$cantidad,$tiempo,$consumo);
    
    // $total=getTotalHora($i);
    header("location:consumo_detalle.php?id=$id_espacio&nombre=$nombre");
    // print_r("Consumo Total (hora): $total");

?>