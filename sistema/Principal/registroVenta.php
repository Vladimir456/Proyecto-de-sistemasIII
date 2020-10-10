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
        <h4>Registar Venta</h4>
        <hr class="divisor-linea" style="margin-bottom: 25px;">


        <form action="venta.php" method="POST">

<div class="form-group">
            <label>Id_Venta</label>
            <input class="form-control" type="text" name="idv" placeholder="Ingresar Id_Venta" required>
   </div>
<div class="form-group">
            <label for="">Nombre_Detalle_Producto</label>
            <input class="form-control" type="text" name="nom" placeholder="Ingresar Nombre_Detalle_Producto " required>
  </div>
<div class="form-group">
              <label for="">Cantidad</label>
            <input class="form-control" type="text" name="cant" placeholder="Ingresar Cantidad" required>
  </div>
  <div class="form-group">
            <label for="">Fcha_Venta</label>
            <input class="form-control" type="text" name="fech" value="<?php echo date("m/d/Y g:ia"); ?>" placeholder="Ingresar Fecha_Venta" required>
 </div>
<div class="form-group">
            <label for="">Observaciones</label>
            <input class="form-control" type="text" name="ob"  placeholder="Ingresar Observaciones" required>
 </div>
 <div class="form-group">
            <label for="">Factura Nro</label>
            <input class="form-control" type="text" name="fa" value="<?php echo $n ?>" placeholder="Ingresar Factura Nro">
 </div>
<div class="form-group">
            <label for="">Id_Producto</label>
            <input class="form-control" type="text" name="idp" placeholder="Ingresar Id_Producto" required>
 </div>
<div class="form-group">
            <label for="">Id_Cliente</label>
            <input class="form-control" type="text" name="idc" placeholder="Ingresar Id_Cliente" required>
             </div>
<div class="form-group">
            <label for="">Id_Empleado</label>
            <input class="form-control"  type="text" name="ide"  placeholder="Ingresar Id_Empleado" required>
</div>


            <button class="btn bg-primary text-white" type="submit">Guardar</button>
            <button class="btn bg-primary text-white" type="button" onclick="redireccionar();">Cancelar</button>
        </form>
    </div>
</body>

</html>