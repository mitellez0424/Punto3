<?php 
    include("conexion.php");
    $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Producto </title>
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

                                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                                    <input type="number" class="form-control mb-3" name="SKU" placeholder="Codigo">
                                    <textarea class="form-control mb-3" name="Descripcion" id="" cols="30" rows="10" placeholder="descripcion"></textarea>
                                    <input type="number" class="form-control mb-3" name="Valor" placeholder="Valor">
                                    <input type="tienda" class="form-control mb-3" name="Tienda" placeholder="Tienda">
                                    <input type="file" class="form-control mb-3" name="Imagen" placeholder="URLimagen">
                                    

                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>SKU</th>
                                        <th>Descripcion</th>
                                        <th>Valor</th>
                                        <th>tienda</th>
                                        <th>imagen</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <td><?php echo $row['Nombre']?></td>
                                                <td><?php echo $row['SKU']?></td>
                                                <td><?php echo $row['Descripcion']?></td>
                                                <td><?php echo $row['Valor']?></td>   
                                                <td><?php echo $row['tienda']?></td>   
                                                <td><?php echo $row['Imagen']?></td>   
                                                <td><a href="actualizar.php?id=<?php echo $row['SKU'] ?>" class="btn btn-info">Editar</a></td>
                                                <td><a href="eliminar.php?id=<?php echo $row['SKU'] ?>" class="btn btn-danger">Eliminar</a></td>                                        
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