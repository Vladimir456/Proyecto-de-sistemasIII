<?php
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$direc = $_POST['direccion'];
$car = $_POST['cargo'];
$tel = $_POST['telefono'];



$pswd = $_POST['pswd'];


$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$sql = "INSERT INTO empleados (Id_Empleado,Nombre_Empleado,Ap_Paterno,Ap_Materno,Direccion,Cargo,Telefono) 
    VALUES ('$cedula','$nombre','$ap','$am',  '$direc','$car','$tel')";
$respuesta = mysqli_query($conexion, $sql);





$con = "INSERT INTO login (Id_Empleado,Password,Cargo) 
VALUES ('$cedula','$pswd','$car')";
$respuesta2 = mysqli_query($conexion, $con);

if ($respuesta && $respuesta2) {
    echo "Persona Agregada";
} else {
	 echo "Persona no agregada"." ".mysqli_error($conexion);
   
}
?>