<?php

include("conexion.php");


$cod_producto= isset($_POST['SKU'])?$_POST['SKU']:NULL;
$nombre=isset($_POST['Nombre'])?$_POST['Nombre']:NULL;
$Valor=isset($_POST['Valor'])?$_POST['Valor']:NULL;
$descripcion=isset($_POST['Descripcion'])?$_POST['Descripcion']:NULL;
$tienda=isset($_POST['Tienda'])?$_POST['Tienda']:NULL;
$imagen=isset($_POST['Imagen'])?$_POST['Imagen']:NULL;

$sql="UPDATE producto SET SKU='$cod_producto', Nombre='$nombre', Valor='$Valor', Descripcion='$descripcion', tienda='$tienda', Imagen='$imagen' WHERE SKU='$cod_producto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
    
?>