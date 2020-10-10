<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <script>
        function volver() {
            window.location = "../plataforma/plataforma.html";
        }
    </script>
    <CENTER>
        <h1>USUARIOS REGISTRADOS</h1>
        <div style="margin-top:10px">
            <table border="1px">
                <thead>
                    <tr>
                        <th scope="col">CI</th>
                        <th scope="col">COD/TIPO-PERSONA</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">FECHA</th>
                        <th scope="col">SISTEMA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "hospital");
                    $sql = "SELECT usuarios.CI,usuarios.CodigoPersona,usuarios.Pswd,usuarios.Fecha,usuarios.Sistema 
                                FROM usuarios
                                INNER JOIN persona
                                ON persona.CI = usuarios.CI;";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td> <?php echo $row['CI'] ?> </td>
                            <td> <?php echo $row['CodigoPersona'] ?> </td>
                            <td> <?php echo $row['Pswd'] ?> </td>
                            <td> <?php echo $row['Fecha'] ?> </td>
                            <td> <?php echo $row['Sistema'] ?> </td>
                            <td>
                                <select name="activo" class="opciones">
                                    <option value="">habilitar</option>
                                    <option value="">Desabilitar</option>
                                </select>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><br><br>
        <button type="button" onclick="volver();">Volver</button>
    </CENTER>
</body>

</html>