<?php 
    require 'conexion1.php';

    $sql="SELECT * FROM usuario";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="ID cuenta">
                                    <input type="text" class="form-control mb-3" name="Apellidos" placeholder="cedula">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="RFC" placeholder="RFC">
                                    <input type="text" class="form-control mb-3" name="rol" placeholder="correo">
                                    <input type="text" class="form-control mb-3" name="contra" placeholder="contra">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>    
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>email</th>
                                        <th>RFC</th>
                                        <th>rol</th>                                        
                                        <th>Acciones</th>                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['idUsuario']?></td>
                                                <td><?php  echo $row['Nombre']?></td>
                                                <td><?php  echo $row['Apellidos']?></td>
                                                <td><?php  echo $row['email']?></th>
                                                <td><?php  echo $row['RFC']?></td>
                                                <td><?php  echo $row['Rol']?></td>                                                                                                                          
                                                <td><a href="actualizar.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-info">Editar</a>
                                                <a href="delete.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-danger">Eliminar</a></td>
                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>