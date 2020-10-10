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
            window.location = "../plataforma/plataformas.html";
        }
    </script>
    <div style="margin-left:40px">
        <h4>Registar Hora Ingreso</h4>
        <hr class="divisor-linea" style="margin-bottom: 25px;">

        <form action="horaingreso.php" method="POST">

<div class="form-group">
            <label>Id_Empleado</label>
            <input class="form-control" type="text" name="cedula" placeholder="Ingresar Id_Empleado" required>
</div>
<div class="form-group">
            <label >Hora de Ingreso</label>
            <input class="form-control" name="fecha" type="text" id="fecha" value="<?php echo date("m/d/Y g:ia"); ?>" size="10" placeholder="Ingresar Hora Ingreso" />
          </div>
            

            <button class="btn bg-primary text-white" type="submit">Guardar</button>
            <button class="btn bg-primary text-white" type="button" onclick="redireccionar();">Cancelar</button>
        </form>
    </div>
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
        </div><br><br>

</body>

</html>