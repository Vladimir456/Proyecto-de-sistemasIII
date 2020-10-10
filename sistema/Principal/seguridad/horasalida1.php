<?php
$cedula = $_POST['cedula'];
$fecha = $_POST['fecha'];






$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$sql = "INSERT INTO registroi (Id_Empleado,Hora_salida) 
    VALUES ('$cedula','$fecha')";
$respuesta = mysqli_query($conexion, $sql);







if ($respuesta) {
    echo "Persona Agregada";
} else {
    echo "Persona no agregada";
}
?>