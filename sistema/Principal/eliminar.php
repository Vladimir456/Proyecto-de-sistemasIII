<?php
$cedula = $_POST['cedula'];






    $conexion = mysqli_connect("localhost","root", "","proyecto");
    $sql = "DELETE FROM empleados,login 
        USING empleados 
        INNER JOIN login
        WHERE empleados.Id_Empleado=login.Id_Empleado 
        AND empleados.Id_Empleado = '$cedula'";
     $resultado = mysqli_query($conexion,$sql);
     if($resultado){
         echo "persona eliminada";
     }
?>