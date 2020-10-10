
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
        <h4>Registar Producto</h4>
        <hr class="divisor-linea" style="margin-bottom: 25px;">


        <form action="insertar_producto.php" method="POST">

            <div class="form-group">
            <label>Id_Producto</label>
            <input class="form-control" type="text" name="idProd"  placeholder="Ingrese el id" required>
            </div>
 <div class="form-group">
            <label >Id_Detalle_Producto</label>
            <input class="form-control" type="text" name="dtpro" placeholder="Ingrese el id Id_Detalle_Producto" required">
             </div>
 <div class="form-group">
            <label for="">Detalle Producto</label>
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese el detalle del producto" required">
             </div>
 <div class="form-group">
            <label>Stock</label>
            <input class="form-control" type="text" name="stock" placeholder="Ingrese el stock" required">     
             </div>
 <div class="form-group">
            <label>Id_Proveedor:</label>
            <input class="form-control" type="text" name="prov" placeholder="Ingrese el id del  proveedor" required/>
 </div>
<div class="form-group">
            <label>Observacion:</label>
            <input class="form-control" type="text" name="obs" placeholder="Ingrese las observaciones" required/>
        </div>     

            <button class="btn bg-primary text-white" type="submit">Guardar</button>
            <button class="btn bg-primary text-white" type="button" onclick="redireccionar();">Cancelar</button>
        </form>
    </div>
</body>

</html>