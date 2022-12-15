<?php 
    require 'DBManager.php';
    
    $detalles = json_decode(getDetalles($_GET['id']));   
    $aparatos = json_decode(getAparatos());        
    
    // $sql="SELECT * FROM usuario";
    // $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Consumo Salones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Salon <?php echo $_GET['nombre']?></h1>
                                <form action="addAparato.php" method="POST">                            
                                    <input type="hidden" name="id_espacio" value="<?php echo $_GET['id']?>">                                    
                                    <select name="id_aparato">
                                        <?php foreach($aparatos as $aparato){?>
                                            <option name="id_aparato" value="<?php echo $aparato->id_aparato?>"><?php echo $aparato->nombre?></option>                            
                                            
                                    <?php }?>
                                    </select>
                                    <input type="number" class="form-control mb-3" name="cantidad" placeholder="Cantidad">
                                    <input type="number" class="form-control mb-3" name="tiempo" placeholder="Tiempo">                                                                                                        
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>    
                                        <th>Id</th>
                                        <th>Aparate</th>
                                        <th>Cantidad</th>                                                                     
                                        <th>Tiempo</th>                                                                     
                                        <th>Total</th>                                                                     
                                        <th>Acciones</th>                                                                     

                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                             foreach($detalles as $detalle){
                                        ?>
                                            <tr>
                                                <!--Aqui van los datos -->             
                                                <?php  
                                                    $id=$detalle->id_consumo;
                                                    $nombre=$detalle->nombre;
                                                    $cantidad=$detalle->cantidad;
                                                    $tiempo=$detalle->tiempo;
                                                    $total=$detalle->total;

                                                ?>                           
                                                <td><?php  echo $id?></td>
                                                <td><?php  echo $nombre?></td>
                                                <td><?php  echo $cantidad?></td>
                                                <td><?php  echo $tiempo?></td>
                                                <td><?php  echo $total?></td>                                            
                                                <td>
                                                <form action="edit_aparato.php" method="get">
                                                    <input type="hidden" name="id" value="<?php echo $id?>">                                                        
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