<?php 
    include("conexion.php");
$id=$_GET['id'];
$sql="SELECT * FROM producto WHERE SKU='$id'";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">      
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    <?php if($row=mysqli_fetch_array($query)) {;?>
                                <input type="hidden" name="cod_producto" value="<?php echo $row['SKU']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']?>">
                                    <input type="number" class="form-control mb-3" name="SKU" placeholder="Codigo" value="<?php echo $row['SKU']?>" >
                                    <textarea class="form-control mb-3" name="Descripcion" id="" cols="30" rows="10" placeholder="descripcion" > <?php echo $row['Descripcion']?> </textarea>
                                    <input type="number" class="form-control mb-3" name="Valor" placeholder="Valor" value="<?php echo $row['Valor']?>">
                                    <input type="tienda" class="form-control mb-3" name="Tienda" placeholder="Tienda" value="<?php echo $row['tienda']?>">
                                    <input type="file" class="form-control mb-3" name="Imagen" placeholder="URLimagen" value="<?php echo $row['Imagen']?>">
                                    <?php } ?>
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                </div>
    </body>
</html>