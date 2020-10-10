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
        function redireccionar() {
            window.location = "../plataforma/plataforma.html";
        }
    </script>
    <div style="margin-left:40px">
        <h4>Eliminar Empleado</h4>
        <hr class="divisor-linea" style="margin-bottom: 25px;">

        <form action="eliminar.php" method="POST">

            <div class="form-group">
            <label>Ingrese el id_empleado a eliminar</label>
            <input class="form-control" type="text" name="cedula"  placeholder="Ingresar Id_Empleado" required>
             </div>  

            

            <button class="btn bg-primary text-white" type="submit">Eliminar</button>
            <button class="btn bg-primary text-white" type="button" onclick="redireccionar();">Cancelar</button>
        </form>
    </div>

     </div>
    <div style="margin-top:10px">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Id_Empleado</th>
                        <th scope="col">Nombre_Empleado</th>
                         <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
                    $sql = "SELECT Id_Empleado,Nombre_Empleado,Ap_Paterno,Ap_Materno
                        FROM empleados";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td scope="row"> <?php echo $row['Id_Empleado'] ?> </td>
                            <td scope="row"> <?php echo $row['Nombre_Empleado'] ?> </td>
                            <td scope="row"> <?php echo $row['Ap_Paterno'] ?> </td>
                            <td scope="row"> <?php echo $row['Ap_Materno'] ?> </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><br><br>
</body>

</html>