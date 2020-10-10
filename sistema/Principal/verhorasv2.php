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
            window.location = "../plataforma/plataformav.html";
        }
    </script>
    <CENTER>
         <h1>Horas Registradas</h1>
        <div style="margin-top:10px">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Id_Empleado</th>
                        <th scope="col">Hora Ingreso</th>
                        <th scope="col">Hora Salida</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
                    $sql = "SELECT registro.Id_Empleado,registro.Hora_ingreso,registroi.Hora_salida 
                                FROM registro
                                INNER JOIN registroi
                                ON registro.Id_Empleado = registroi.Id_Empleado;";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td scope="row"> <?php echo $row['Id_Empleado'] ?> </td>
                            <td scope="row"> <?php echo $row['Hora_ingreso'] ?> </td>
                            <td scope="row"> <?php echo $row['Hora_salida'] ?> </td>
                           
                          
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <button class="btn bg-primary text-white" type="button" onclick="volver();">Volver</button>
    </CENTER>
</body>

</html>