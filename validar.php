<?php 
   require 'conexion.php';

  $nombre = $_POST["nombre"];
  $contra = $_POST["contra"];


  $conexion = mysqli_connect($servername,$username, $password, $database);

  $consulta="SELECT * FROM usuario WHERE nombre='$nombre' and contra='$contra'";
  $resultado=mysqli_query($conexion, $consulta);

  $filas=mysqli_num_rows($resultado);
  if($filas>0){
    header("location:inicioUsuario.html");
  }
  else{
    echo"Error en el inicio de sesion";
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);

?>