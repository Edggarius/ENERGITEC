<?php 
   require 'conexion1.php';

  $nombre = $_POST["nombre"];
  $contra = sha1($_POST["contra"]);

  $consulta="SELECT * FROM usuario WHERE Nombre='$nombre' and contra='$contra'";
  $resultado=mysqli_query($con, $consulta);

  $filas=mysqli_num_rows($resultado);
  if($filas>0){
    header("location:inicioUsuario.html");
  }
  else{
    echo"Error en el inicio de sesion";
    header('location:login.html?resp=false');
  }
  mysqli_free_result($resultado);
  mysqli_close($con);

?>