<?php
$pswdActual = $_POST['pswdActual'];
$pswdNuevo = $_POST['pswdNuevo'];
$pswdConfirmar = $_POST['pswdConfirmar'];

if ($pswdNuevo == $pswdConfirmar) {
  $conexion = mysqli_connect("localhost", "root", "", "proyecto");
    $sql = "UPDATE Login SET Password = '$pswdNuevo' WHERE Password = '$pswdActual'";
    $resultado = mysqli_query($conexion,$sql);
    if($resultado){
        header("location:index.html");
    }
} else {
    echo "no son el mismo password";
}
