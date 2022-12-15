<?php 
    require 'DBManager.php';
    $interiores = json_decode(getInteriores());    
    // $sql="SELECT * FROM usuario";
    // $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Interior</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Nuevo Edificio</h1>
                                <form action="insertarInterior.php" method="POST">                            
                                    <input type="text" class="form-control mb-3" name="edificio" placeholder="Edificio">
                                    <input type="text" class="form-control mb-3" name="planta" placeholder="Planta">
                                    <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">                                                                                                        
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>    
                                        <th>Id</th>
                                        <th>Edificio</th>
                                        <th>Planta</th>
                                        <th>Descripcion</th>                                                                     
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                             foreach($interiores as $interior){
                                        ?>
                                            <tr>
                                                <!--Aqui van los datos -->                                        
                                                <td><?php  echo $interior->id_interior?></td>
                                                <td><?php  echo $interior->edificio?></td>
                                                <td><?php  echo $interior->planta?></td>
                                                <td><?php  echo $interior->descripcion?></td>     
                                                <td><a href="actualizar.php?id=<?php echo $row['idUsuario'] ?>" class="btn btn-info">Editar</a></td>                                                                                                                                                                                                         
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