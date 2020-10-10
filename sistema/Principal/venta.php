<?php
$idventa = $_POST['idv'];
$nompro = $_POST['nom'];
$cant = $_POST['cant'];
$fechv = $_POST['fech'];
$obs = $_POST['ob'];
$fac = $_POST['fa'];
$idpro = $_POST['idp'];
$idcli = $_POST['idc'];
$idem = $_POST['ide'];

$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$sql = "INSERT INTO Ventas (Id_Venta,Nombre_Detalle_Producto,Cantidad,Fcha_Venta,Observaciones,Factura,Id_Producto,Id_Cliente,Id_Empleado)
    VALUES ('$idventa','$nompro','$cant','$fechv', '$obs','$fac','$idpro','$idcli','$idem')";
$respuesta = mysqli_query($conexion, $sql);


$con = "UPDATE Productos SET 
        Stock = Stock-'$cant'
       WHERE Id_Producto = '$idpro'";

$res = mysqli_query($conexion,$con);

if ($respuesta ) {
    echo "Venta realizada";
} else {
    echo "Venta no realizada"." ".mysqli_error($conexion);
}
?>