<?php
    
    require 'conexion1.php';
    $Nombre = $_POST["Nombre"];
    $email = $_POST["email"];
    $RFC = $_POST["RFC"];
    $contra = $_POST["contra"];
    $Rol = $_POST["rol"];
    $Apellidos= $_POST["Apellidos"];

    $verificar_nombre = mysqli_query($con, "SELECT * FROM usuario WHERE Nombre='$Nombre'");
    
    if(mysqli_num_rows($verificar_nombre) > 0){
        
        echo "<script> 
            alert('YA ESTA REGISTRADA ESA MATRICULA')
            location.href = '../LOGINRESPONSIVO/Registrar.php'
            </script>";

    } else {        
        $insert = "INSERT INTO usuario values('$Nombre','$Apellidos', '$email', '$RFC', '$Rol', sha1('$contra'), '' )";
        $query = mysqli_query($con, $insert);


        if ($query) {
            echo "<script> 
            alert('USUARIO REGISTRADO CORRECTAMENTE')
            location.href = '../LOGINRESPONSIVO/Registrar.php'
            </script>";
        } else {
            echo "<script> 
            alert('ERRORR AL REGISTRAR USUARIO')
            location.href = '../LOGINRESPONSIVO/Registrar.php'
            </script>";
        }
    }

    header("location:Login.html")

?>