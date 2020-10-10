<?php
$idpro = $_POST['idpro'];

    $conexion = mysqli_connect("localhost","root", "","proyecto");
    $sql = "DELETE FROM productos,detalle_producto 
        USING productos 
        INNER JOIN detalle_producto
        WHERE productos.Id_Detalle_Producto=detalle_producto.Id_Detalle_Producto 
        AND productos.Id_Detalle_Producto = '$idpro'";
     $resultado = mysqli_query($conexion,$sql);

     if($resultado){
        echo "persona eliminada";
        
     }
     else{
        echo "No se pudo eliminar"." ".mysqli_error($conexion);
     }
?>