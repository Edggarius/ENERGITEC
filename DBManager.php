<?php 
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
        $sql = "SELECT * FROM edificios";
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
    function getEspacios($id_edificio){ //Permite devolver todos los salones asociados a un EDIFICIO
        require 'conexion1.php';
        $sql = "SELECT * FROM espacios WHERE id_edificio='$id_edificio'";
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
    function getDetalles($id_espacio){
        require 'conexion1.php';
        $sql = "SELECT * FROM consumo INNER JOIN aparatos ON consumo.id_aparato=aparatos.id_aparato WHERE id_espacio='$id_espacio'";
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
    //$id_aparato,$id_espacio,$cantidad,$tiempo,$total
    function addAparato($id_aparato,$id_espacio,$cantidad,$tiempo,$total){
        require 'conexion1.php';
        $sql = "INSERT INTO consumo VALUES ('','$id_aparato','$id_espacio','$cantidad','$tiempo','$total')";
        mysqli_query($con, $sql);

    mysqli_close($con);   
    }
    function getAparato($id_aparato){
        require 'conexion1.php';
        $sql = "SELECT * FROM aparatos WHERE id_aparato='$id_aparato'";
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

    function getConsumo($potencia,$tiempo,$cantidad){
        $consumo;
        $consumo = 0.001*$potencia*$tiempo;
        $consumo*=$cantidad;
        return $consumo;
    }


?>