<?php
$id = $_GET['id'];
$direc = $_POST['direccion'];
$tel = $_POST['telefono'];


$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$sql = "UPDATE productos SET 
        Direccion = '$direc',
        Telefono = '$tel',
        WHERE Id_Empleado = '$id'";

$resultado = mysqli_query($conexion,$sql);

if($resultado){
       echo "se actualizo persona";
}
