<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
    $id = $_GET['id'];
    $consulta = "SELECT * FROM productos WHERE Id_Empleado = $id";
    $datos = mysqli_query($conexion, $consulta);
    $ver = mysqli_fetch_array($datos);
    ?>

    <script>
        function volver() {
            window.location = "../../";
        }
    </script>

    <div class="container col-7 borderForm" style="padding:20px;margin-top:20px">
        <h4>Actualizar Persona</h4>
        <form action="editarPersona.php?id=<?php echo $id ?>" method="POST">
            <label for="">Id empleado:</label>
            <input type="text" value="<?php echo $ver[0] ?>"  name="cedula" required"><br><br>

            

            <label for="">Nombre:</label>
            <input type="text" value="<?php echo $ver[1] ?>"   name="nombre"><br><br>

            <label for="">Apellido Paterno:</label>
            <input type="text" value="<?php echo $ver[2] ?>"   name="ap"><br><br>

            <label for="">Apellido Materno:</label>
            <input type="text" value="<?php echo $ver[3] ?>"  name="am"><br><br>                   

            

            <label>Direccion:</label>
            <textarea name="direccion" rows="1"><?php echo $ver[8] ?></textarea><br><br>
            
            <label>Cargo:</label>
            <textarea name="cargo" rows="1"><?php echo $ver[8] ?></textarea><br><br>


            <label>Telefono:</label>
            <input type="tel" name="telefono" value="<?php echo $ver[10] ?>"><br><br>

            

            

            

            <button type="submit" class="btn btn-primary btn-sm btn-block">Guardar</button>
            <button type="button" class="btn btn-danger btn-sm btn-block" onclick="volver();">Cancelar</button>
        </form>
    </div>
</body>

</html>