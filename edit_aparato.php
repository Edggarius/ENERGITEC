<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>Modificar Aparato</title>
</head>
<body>
    <?php 
        $consumo=$_GET['id'];
        require 'DBManager.php';
        $aparatos = json_decode(getAparatos());        
        $detalle=json_decode(getDetalleConsumo($consumo))[0];
        print_r($detalle);
    ?>
    <form action="" method="POST">                            
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
</body>
</html>