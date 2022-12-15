<?php 
    require 'conexion1.php';

    $sql="SELECT * FROM interior";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consumo Interior</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertarInterior.php" method="POST">

                    <input type="text" class="form-control mb-3" name="idInterior" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="Edificio" placeholder="Edificio">
                    <input type="text" class="form-control mb-3" name="Plantas" placeholder="Planta">
                    <input type="text" class="form-control mb-3" name="NumSZ" placeholder="Seccion">
                    <input type="text" class="form-control mb-3" name="Descripcion" placeholder="Descripcion">

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Edificio</th>
                            <th>Planta</th>
                            <th>Seccion</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                        <tr>
                            <th><?php  echo $row['idInterior']?></th>
                            <th><?php  echo $row['Edificio']?></th>
                            <th><?php  echo $row['Plantas']?></th>
                            <th><?php  echo $row['NumSZ']?></th>
                            <th><?php  echo $row['Descripcion']?></th>
                            <td><a href="actualizar.php?id=<?php echo $row['idInterior'] ?>" class="btn btn-info">Editar</a>
                            <a href="delete.php?id=<?php echo $row['idInterior'] ?>" class="btn btn-danger">Eliminar</a></td>
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