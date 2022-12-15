<?php 
    include("conexion1.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuario WHERE email='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="nombre" value="<?php echo $row['Nombre']  ?>">
                                <p>Nombre de Usuario</p>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
                                <p>Apellidos</p>
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                                <p>Correo Electronico</p>
                                <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                <p>RFC</p>
                                <input type="text" class="form-control mb-3" name="RFC" placeholder="RFC" value="<?php echo $row['RFC']  ?>">
                                <p>Rol</p>
                                <input type="text" class="form-control mb-3" name="Rol" placeholder="contra" value="<?php echo $row['Rol']  ?>">
                                <p>Contraseña</p>
                                <input type="text" class="form-control mb-3" name="contra" placeholder="contra" value="<?php echo $row['contra']  ?>">
                                 <p>idUsuario</p>
                                <input type="text" class="form-control mb-3" name="contra" placeholder="contra" value="<?php echo $row['idUsuario']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                </div>
    </body>
</html>