<?php 

    function addAparato($nombre,$foto,$potencia){
        require 'conexion1.php';
            $sql = "INSERT INTO aparatos VALUES ('','$nombre','$foto','$potencia')";
            mysqli_query($con, $sql);
    
        mysqli_close($con);
    }

    function getAparatos(){
        require 'conexion1.php';
        $sql = "SELECT * FROM aparatos";
        $resultArray = mysqli_query($con, $sql);        
        if (mysqli_num_rows($resultArray) > 0) {
            
            $resultados = array();
            while( ($fetch = mysqli_fetch_array($resultArray, MYSQLI_ASSOC))!= NULL) {
                array_push($resultados, $fetch);
            }   
            mysqli_close($con);
            return json_encode($resultados);
        }        
    }
    

    function addInterior($edificio,$planta,$descripcion){
        require 'conexion1.php';
            $sql = "INSERT INTO interior VALUES ('','$edificio','$planta','$descripcion')";
            mysqli_query($con, $sql);
    
        mysqli_close($con);        
    }
    function getInteriores(){
        require 'conexion1.php';
        $sql = "SELECT * FROM interior";
        $resultArray = mysqli_query($con, $sql);        
        if (mysqli_num_rows($resultArray) > 0) {
            
            $resultados = array();
            while( ($fetch = mysqli_fetch_array($resultArray, MYSQLI_ASSOC))!= NULL) {
                array_push($resultados, $fetch);
            }   
            mysqli_close($con);
            return json_encode($resultados);
        }              
    }

?>