<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Modificar Aparato</title>
</head>
<body>
    <?php 
        $consumo=$_GET['id'];
        require 'DBManager.php';        
        $aparatos = json_decode(getAparatos());        
        $detalle=json_decode(getDetalleConsumo($consumo))[0]; 
        if(isset($_POST['update'])){            
            updateConsumo($consumo, $_POST['cantidad'], $_POST['tiempo']);
            header("location:edit_aparato.php?id=$consumo");
        }else if(isset($_GET['delete'])){
            deleteConsumo($consumo);
            header('location:consumos.php');            
        }       
    ?>
    <form action="" method="POST">                            
        <input type="hidden" name="id_consumo" value="<?php echo $_GET['id']?>">
        <label for="exampleInputEmail1">Cantidad</label>                                    
        <input type="number" class="form-control mb-3" name="cantidad" value="<?php echo $detalle->cantidad?>" placeholder="Cantidad">
        <label for="exampleInputEmail1">Tiempo</label>
        <input type="number" class="form-control mb-3" name="tiempo" value="<?php echo $detalle->tiempo?>" placeholder="Tiempo">                                                                                                        
        <input type="submit" name="update" class="btn btn-primary">
    </form>
</body>
</html>