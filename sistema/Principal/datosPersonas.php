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
     function volver(){
        window.location = "../plataforma/plataforma.html";
     }
 </script>
    <table border="1px">
        <thead class="bg-info">
            <tr>
                <th scope="col">CI</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">PATERNO</th>
                <th scope="col">MATERNO</th>
                <th scope="col">NAC</th>
                <th scope="col">GEN</th>
                <th scope="col">T/S</th>
                <th scope="col">NLD</th>
                <th scope="col">DIREC</th>
                <th scope="col">EMAIL</th>
                <th scope="col">TEL</th>
                <th scope="col">CEL</th>
                <th scope="col">Wathssap</th>
                <th scope="col">Foto</th>
                <th scope="col">T/P</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conexion = mysqli_connect("localhost", "root", "", "hospital");
            $consulta = "SELECT * FROM persona";
            $datos = mysqli_query($conexion, $consulta);
            foreach ($datos as $row) {
                ?>
                <tr>
                    <td> <?php echo $row['CI'] ?> </td>
                    <td> <?php echo $row['Nombre'] ?> </td>
                    <td> <?php echo $row['ApellPaterno'] ?> </td>
                    <td> <?php echo $row['ApellMaterno'] ?> </td>
                    <td> <?php echo $row['FechaNac'] ?> </td>
                    <td> <?php echo $row['Genero'] ?> </td>
                    <td> <?php echo $row['TipoSangre'] ?> </td>
                    <td> <?php echo $row['Nacionalidad'] ?> </td>
                    <td> <?php echo $row['Direccion'] ?> </td>
                    <td> <?php echo $row['Correo'] ?> </td>
                    <td> <?php echo $row['Telefono'] ?> </td>
                    <td> <?php echo $row['Celular'] ?> </td>
                    <td> <?php echo $row['Wathssap'] ?> </td>
                    <td> <?php echo $row['Foto'] ?> </td>
                    <td style="color:blue;"> <?php echo $row['TipoPersona'] ?> </td>
                    <td>
                        <a href="editarPersonaForm.php?id=<?php echo $row['CI'] ?>">Editar</a>
                        <a href="eliminarPersona.php?id=<?php echo $row['CI'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div> <br><br>

    <button type="button" class="btn btn-outline-danger btn-sm btn-block" onclick="volver();">Principal</button>

</body>

</html>