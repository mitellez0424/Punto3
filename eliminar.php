<?php

include("conexion.php");


$id=$_GET['id'];

$sql="DELETE FROM producto WHERE SKU='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: producto.php");
    }
?>
