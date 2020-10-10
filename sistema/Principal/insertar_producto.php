<?php
$idDetallePro = $_POST['dtpro'];
$nombreDetalle = $_POST['nombre'];
$idProd = $_POST['idProd'];
$stock = $_POST['stock'];
$Idprov = $_POST['prov'];
$observacion = $_POST['obs'];



$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$sql ="INSERT INTO Productos (Id_Producto, Id_Detalle_Producto, Stock, Id_Proveedor, 
Observacion) 
VALUES ('$idProd','$idDetallePro','$stock','$Idprov','$observacion')";
$respuesta = mysqli_query($conexion, $sql);





$con = "INSERT INTO Detalle_Producto(Id_Detalle_Producto,Nombre_Detalle_Producto) 
VALUES ('$idDetallePro','$nombreDetalle')";
$respuesta2 = mysqli_query($conexion, $con);

if ($respuesta && $respuesta2) {
    echo "Producto Agregado";
} else {
     echo "Producto no Agregado"." ".mysqli_error($conexion);
}
?>