<?php
include("conexion.php");



$cod_producto= isset($_POST['SKU'])?$_POST['SKU']:NULL;
$nombre=isset($_POST['Nombre'])?$_POST['Nombre']:NULL;
$Valor=isset($_POST['Valor'])?$_POST['Valor']:NULL;
$descripcion=isset($_POST['Descripcion'])?$_POST['Descripcion']:NULL;
$tienda=isset($_POST['Tienda'])?$_POST['Tienda']:NULL;
$imagen=isset($_FILES['Imagen'])?$_FILES['Imagen']:NULL;

$_FILES['Imagen']['name'];
echo $_FILES['Imagen']['name'];

if ($_FILES['Imagen']['name']) {
    $Carpeta = "filesystem/";
    $NombreArchivo = time() . $_FILES['Imagen']['name'];
    $ArchivoUbicacionFinal = $Carpeta . " " . $NombreArchivo;
    $ArchivoTamaño = $_FILES["Imagen"]['size'];
    $ArchivoNombreTemporal = $_FILES['Imagen']['tmp_name'];
    if (move_uploaded_file($ArchivoNombreTemporal, $ArchivoUbicacionFinal)) {
        $insertarArchivo = '0';
        echo $insertarArchivo;
    }
}

$sql="INSERT INTO producto ( SKU, Nombre, Valor, Descripcion, tienda, Imagen ) VALUES('$cod_producto', '$nombre', '$Valor', '$descripcion', '$tienda', '$NombreArchivo')";


$query= mysqli_query($con,$sql);

if($query){
    Header("Location: producto.php");
    
}else {
}
?>