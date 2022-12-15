<?php 
    require 'DBManager.php';
    $aparatos = json_decode(getAparatos());    
    // $sql="SELECT * FROM usuario";
    // $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Aparatos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Nuevo Aparato</h1>
                                <form action="insertarAparato.php" method="POST">

                                    
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="foto" placeholder="Foto">
                                    <input type="number" class="form-control mb-3" name="potencia" placeholder="Wats">                                                                                                        
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>    
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Foto</th>
                                        <th>Potencia</th>                                                                     
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                             foreach($aparatos as $aparato){
                                        ?>
                                            <tr>
                                                <!--Aqui van los datos -->                                        
                                                <td><?php  echo $aparato->id_aparato?></td>
                                                <td><?php  echo $aparato->nombre?></td>
                                                <td><?php  echo $aparato->foto?></td>
                                                <td><?php  echo $aparato->potencia?></th>                                                                                                                        
                                                                                      
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