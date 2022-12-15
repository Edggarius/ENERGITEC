<?php 
    require 'DBManager.php';
    $id_edificio = $_POST['id'];
    $espacios=json_decode(getEspacios($id_edificio));
    
    // $espacios = json_decode(getEspacios($id_edificio));    
    // $sql="SELECT * FROM usuario";
    // $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Consumo Espacios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Edificio <?php echo $_POST['nombre']?></h1>
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
                                        <th>Salon</th>
                                        <th>Total</th>                                                                     
                                        <th>Accion</th>                                                                     
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                             foreach($espacios as $espacio){
                                                $id_espacio =$espacio->id_espacio;
                                                $numero = $_POST['nombre'].$espacio->numero;
                                                $total =$espacio->total;
                                        ?>
                                            <tr>
                                                <!--Aqui van los datos -->                                        
                                                <td><?php  echo $id_espacio?></td>
                                                <td><?php  echo $numero;?></td>
                                                <td><?php  echo $total?></td>                                                
                                                <td>
                                                <form action="consumo_detalle.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $id_espacio?>">    
                                                    <input type="hidden" name="nombre" value="<?php echo $numero?>">                                                
                                                    <button type="submit" class="btn btn-info">Editar</button>
                                                </form>                                                                                           
                                                </td>                                                                                                                                                                                                         
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