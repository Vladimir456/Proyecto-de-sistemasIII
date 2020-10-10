<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <script>
        function volver() {
            window.location = "../plataforma/plataforma.html";
        }
    </script>
    <CENTER>
        <h1>Inventario</h1>
        <div style="margin-top:10px">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Id Producto</th>
                        <th scope="col">Id detalle producto</th>
                        <th scope="col">Nombre producto</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Id Proveedor</th>
                        <th scope="col">Observaciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
                    $sql = "SELECT productos.Id_Producto,productos.Id_Detalle_Producto,productos.Stock,productos.Id_Proveedor,productos.Observacion,detalle_producto.Nombre_Detalle_Producto 
                                FROM productos
                                INNER JOIN detalle_producto 
                                ON productos.Id_Detalle_Producto=detalle_producto.Id_Detalle_Producto;";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td scope="row"> <?php echo $row['Id_Producto'] ?> </td>                           
                            <td scope="row"> <?php echo $row['Id_Detalle_Producto'] ?> </td>
                            <td scope="row"> <?php echo $row['Nombre_Detalle_Producto'] ?> </td>
                            <td scope="row"> <?php echo $row['Stock'] ?> </td>
                            <td scope="row"> <?php echo $row['Id_Proveedor'] ?> </td>
                            <td scope="row"> <?php echo $row['Observacion'] ?> </td>
                             
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button class="btn bg-primary text-white" type="button" onclick="volver();">Volver</button>
    </CENTER>
</body>

</html>