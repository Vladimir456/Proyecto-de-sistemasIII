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
        <h4>Eliminar Producto</h4>
        <hr class="divisor-linea" style="margin-bottom: 25px;">

        <form action="eliminarPro.php" method="POST">

<div class="form-group">
            <label>Ingrese el id del producto a eliminar</label>
            <input class="form-control" type="text" name="idpro" placeholder="Ingresar Id_Producto" required>
           </div> 

            

            <button class="btn bg-primary text-white" type="submit">Eliminar</button>
            <button class="btn bg-primary text-white" type="button" onclick="redireccionar();">Cancelar</button>
        </form>
    </div>
    <div style="margin-top:10px">
            <table class="table" border="1px">
                <thead>
                    <tr>
                        <th scope="col">Id_Detalle_Producto</th>
                        <th scope="col">Nombre_Detalle_Producto</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
                    $sql = "SELECT Id_Detalle_Producto,Nombre_Detalle_Producto
                        FROM detalle_producto";

                    $datos = mysqli_query($conexion, $sql);
                    foreach ($datos as $row) {
                        ?>
                        <tr>
                            <td scope="row"> <?php echo $row['Id_Detalle_Producto'] ?> </td>
                            <td scope="row"> <?php echo $row['Nombre_Detalle_Producto'] ?> </td>
                            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><br><br>
      
</body>

</html>