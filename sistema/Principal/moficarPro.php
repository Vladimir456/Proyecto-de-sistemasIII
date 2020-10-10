<?php
$idProd = $_POST['idProd'];
$stock = $_POST['stock'];




$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$sql ="UPDATE productos SET 
        Stock = Stock + '$stock'
       WHERE Id_Producto = '$idProd'";
$respuesta = mysqli_query($conexion, $sql);


if ($respuesta) {
    echo "Producto actualizado";
} else {
    echo "producto no modificado"." ".mysqli_error($conexion);
}
?>
