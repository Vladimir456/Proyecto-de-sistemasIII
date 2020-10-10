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
        <h1>Lista Personal</h1>
        <div style="margin-top:10px">
            <table  class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Id_Empleado</th>
                        <th scope="col">Nombre_Empleado</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Telefono</th>
                    </tr>
                </thead>
                  <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
                    $sql = "SELECT Id_Empleado,Nombre_Empleado,Ap_Paterno,Ap_Materno,Direccion,Cargo,Telefono
                        FROM empleados";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td scope="row"> <?php echo $row['Id_Empleado'] ?> </td>
                            <td scope="row"> <?php echo $row['Nombre_Empleado'] ?> </td>
                            <td scope="row"> <?php echo $row['Ap_Paterno'] ?> </td>
                            <td scope="row"> <?php echo $row['Ap_Materno'] ?> </td>
                            <td scope="row"> <?php echo $row['Direccion'] ?> </td>
                            <td scope="row"> <?php echo $row['Cargo'] ?> </td>
                            <td scope="row"> <?php echo $row['Telefono'] ?> </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button class="btn bg-primary text-white" type="button" onclick="volver();">Volver</button>
    </CENTER>
</body>

</html>