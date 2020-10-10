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
        function plataforma() {
            window.location = "../plataforma/plataforma.html";
        }
    </script>
    <CENTER>
        <form action="insertarTipoPersona.php" method="POST" style="padding:10px">
            <h2>Tipo Persona</h2>
            <label>Codigo Tipo persona</label>
            <input type="text" name="codTipoPersona" required><br><br>

            <label>Nombre nivel Usuario</label>
            <input type="text" name="nombreTipousuario"><br><br>

            <label>Permisos</label><br><br>

            <input type="checkbox" value="1" name="permisos[]">
            <label>adicionar</label>

            <input type="checkbox" value="2" name="permisos[]" id="gridCheck">
            <label>editar</label>

            <input type="checkbox" value="3" name="permisos[]" id="gridCheck">
            <label>borrar</label>

            <input type="checkbox" value="4" name="permisos[]" id="gridCheck">
            <label>solo lectura</label>

            <input type="checkbox" value="5" name="permisos[]" id="gridCheck">
            <label>acceso a reportes</label>

            <input type="checkbox" value="6" name="permisos[]" id="gridCheck">
            <label>imprimir</label>

            <input type="checkbox" value="7" name="permisos[]" id="gridCheck">
            <label>acceso especial</label><br><br>

            <button type="submit">Guardar</button>
            <button type="button" onclick="plataforma();">Cancerlar</button>
        </form>
    </CENTER>
</body>

</html>