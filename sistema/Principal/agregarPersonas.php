<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    //genera 6 numeros aleatoreamwnte
    $n = rand(1000000000, 9000000000);
    ?>
    <script>
        function redireccionar() {
            window.location = "../plataforma/plataforma.html";
        }
    </script>
    <div style="margin-left:40px">
        <h4>Registar persona</h4>
        <hr class="divisor-linea" style="margin-bottom: 25px;">

        <form action="insertar_persona.php" method="POST">

        	<div class="form-group">
        		<label>Id_Empleado</label>
            <input class="form-control" type="text" name="cedula" placeholder="Ingreser id" required>
						
		</div>

            <div class="form-group">
            <label for="">Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Ingreser su nombre" required>
            </div>

			<div class="form-group">
              <label for="">Apellido Paterno</label>
            <input class="form-control" type="text" name="ap" placeholder="Ingreser su apellido paterno" required>
</div>
<div class="form-group">
            <label for="">Apellido Materno</label>
            <input class="form-control" type="text" name="am" placeholder="Ingreser su apellido materno" required>
</div>
         
<div class="form-group">
            <label>Direccion:</label>
            <input class="form-control" type="text" name="direccion" placeholder="Ingreser su direccion" required />
</div>
            <div class="form-group">
            <label>Telefono:</label>
            <input class="form-control" type="text" name="telefono" placeholder="Ingreser su telefono" required><br><br>

            <label for="sel1">cargo</label>
            <select class="form-control" id="sel1" name="cargo">
               <option>Administrador</option>
                <option>Vendedor</option>
                <option>Seguridad</option>
            </select>
</div>
<div class="form-group">
            <label for="">Password:</label>
            <input class="form-control" type="text" value="<?php echo $n ?>" name="pswd" placeholder="Ingreser su telefono" required>
</div>
            

            <button type="submit" class="btn bg-primary text-white">Guardar</button>
            <button class="btn bg-primary text-white" type="button" onclick="redireccionar();">Cancelar</button>
        </form>
    </div>
</body>

</html>