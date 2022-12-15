<?php


        require 'conexion1.php';
        $idExterior = $_POST["idExterior"];
        $Estacionamiento   = $_POST["Estacionamiento"];
        $Areas = $_POST["Areas"];


        
        $_GRABAR_SQL ="INSERT INTO exterior (idExterior, Estacionamiento, Areas ) VALUES ('$idExterior' ,'$Estacionamiento', 
        '$Areas')";
        $query = mysqli_query($con, $_GRABAR_SQL);
                        if($query){
                            echo"Datos guardados <br><a href='editExterior.php'>Volver</a>";
                        }
                        

        else{
                echo"Ocurrio un problema";
        }