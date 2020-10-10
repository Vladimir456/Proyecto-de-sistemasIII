<?php

$codTipoPersona = $_POST['codTipoPersona'];
$nomTipoPermiso = $_POST['nombreTipousuario'];
$permisos =  $_POST['permisos'];

//cuenta los permisos que se marcaron y pasamos a una variable
$num = count($permisos);
//creamos un array
$valores = array();
//vamos a imprimir los permisos que se marcaron
for ($n = 0; $n < $num; $n++) {
    if (isset($permisos[$n])) {
        $valores[$permisos[$n]] = $permisos[$n];
    }
}
for ($i = 1; $i <= 7; $i++) {
    if (isset($valores[$i]) == $i) {
        $valores[$i] = 1;
    } else {
        $valores[$i] = 0;
    }
}

$p = "";
for ($i = 1; $i <= 7; $i++) {
    // $p=+""+$valores[$i] + "";
    $p = $valores[$i] . $p;
}

$conexion = mysqli_connect("localhost", "root", "", "hospital");
$sql = "INSERT INTO TipoPersona (Codigo_tipo_persona,Nombre_tipo_usuario,Permisos) 
    VALUES ('$codTipoPersona', '$nomTipoPermiso', '$p')";

$resultado = mysqli_query($conexion,$sql);

if ($resultado) {
    
    echo "se agrego el tipo de persona";
    //header("location:../formularios/form_plataforma.php");
} else {
    echo "no se pudo agregar el tipo de persona";
    //header("location:../formularios/from_tipo_persona.php");
}
