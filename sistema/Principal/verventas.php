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
        <h1>Ventas Registradas</h1>
        <div style="margin-top:10px">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Id_Venta</th>
                        <th scope="col">Nombre_Detalle_Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Fecha_Venta</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Factura</th>
                        <th scope="col">Id_Producto</th>
                        <th scope="col">Id_Cliente</th>
                        <th scope="col">Id_Empleados</th>
                    </tr>
                </thead>
                  <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
                    $sql = "SELECT Id_Venta,Nombre_Detalle_Producto,Cantidad,Fcha_Venta,Observaciones,Factura,Id_Producto,Id_Cliente,Id_Empleado
                        FROM ventas";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td scope="row"> <?php echo $row['Id_Venta'] ?> </td>
                            <td scope="row"> <?php echo $row['Nombre_Detalle_Producto'] ?> </td>
                            <td scope="row"> <?php echo $row['Cantidad'] ?> </td>
                            <td scope="row"> <?php echo $row['Fcha_Venta'] ?> </td>
                            <td scope="row"> <?php echo $row['Observaciones'] ?> </td>
                            <td scope="row"> <?php echo $row['Factura'] ?> </td>
                            <td scope="row"> <?php echo $row['Id_Producto'] ?> </td>
                              <td scope="row"> <?php echo $row['Id_Cliente'] ?> </td>
                            <td scope="row"> <?php echo $row['Id_Empleado'] ?> </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button class="btn bg-primary text-white" type="button" onclick="volver();">Volver</button>
    </CENTER>
</body>

</html>

