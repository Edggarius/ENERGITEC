<?php


        require 'conexion1.php';
        $idInterior = $_POST["idInterior"];
        $Edificio   = $_POST["Edificio"];
        $Plantas = $_POST["Plantas"];
        $NumSZ = $_POST["NumSZ"];
        $Descripcion = $_POST["Descripcion"];

        
        $_GRABAR_SQL ="INSERT INTO interior (idInterior, Edificio, Plantas, NumSZ, Descripcion) VALUES ('$idInterior'
        ,'$Edificio', 
        '$Plantas',
        '$NumSZ',
        '$Descripcion')";
        $query = mysqli_query($con, $_GRABAR_SQL);
                        if($query){
                            echo"Datos guardados <br><a href='editInterior.php'>Volver</a>";
                        }
                        

        else{
                echo"Ocurrio un problema";
        }

        ?>