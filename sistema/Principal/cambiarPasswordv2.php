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

        <form action="cambiarPasswordUser.php" method="post">
            <h2>Cambiar Password</h2><br>

<div class="form-group">
            <label>Ingrese su password actual</label>
            <input class="form-control" type="password" name="pswdActual" placeholder="Ingresar su Password" required>
 </div>
<div class="form-group">
            <label>Ingrese su nuevo password</label>
            <input class="form-control" type="password" name="pswdNuevo" placeholder="Ingresar su Nuevo Password" required>
</div>
<div class="form-group">
            <label>Confirma su nuevo password</label>
            <input class="form-control" type="password" name="pswdConfirmar" placeholder="Confirme su Nuevo Password" required>
</div>
            <button class="btn bg-primary text-white" type="submit" required>Cambiar</button>
            <button class="btn bg-primary text-white" type="button" required onclick="volver()"> Cancelar</button>
        </form>
    </CENTER>
</body>

</html>