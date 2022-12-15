<?php 
    require 'conexion1.php';

    $sql="SELECT * FROM exterior";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EXTERIOR</title>
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
                                <form action="insertarExterior.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="idExterior" placeholder="Numero Lugar">
                                    <input type="text" class="form-control mb-3" name="Estacionamiento" placeholder="Estacionamiento">
                                    <input type="text" class="form-control mb-3" name="Areas" placeholder="Area">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>    
                                        <th>Id</th>
                                        <th>Estacionamiento</th>
                                        <th>Area</th>                                    
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php  echo $row['idExterior']?></td>
                                                <td><?php  echo $row['Estacionamiento']?></td>
                                                <td><?php  echo $row['Areas']?></td>                                                                                                                       
                                                <td><a href="actualizar.php?id=<?php echo $row['idExterior'] ?>" class="btn btn-info">Editar</a>
                                                <a href="delete.php?id=<?php echo $row['idExterior'] ?>" class="btn btn-danger">Eliminar</a></td>
                                                
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