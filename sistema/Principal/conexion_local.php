<?php
$conexion = mysqli_connect("localhost", "root", "", "proyecto");
or die("Problemas con la conexion");

if ($conexion) {
	echo "conectado con exito";
} else {
	echo "error en la conexion";
}
