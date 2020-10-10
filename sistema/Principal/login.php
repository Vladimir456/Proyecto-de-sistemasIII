<?php
  
    $cedula = $_POST['cedula'];
    $pswd = $_POST['pswd'];
    $conexion = mysqli_connect("localhost", "root", "", "proyecto");

    $consulta1 = "SELECT *
                 FROM Login
                 WHERE Id_Empleado = '$cedula' and Password = '$pswd'";
   
    $consulta = "SELECT Id_Empleado,Password 
                 FROM Login
                 WHERE Id_Empleado = '$cedula' and Password = '$pswd'";
    $resultado = mysqli_query($conexion, $consulta);
$resultado1 = mysqli_query($conexion, $consulta1);


    
    if (mysqli_num_rows($resultado)==1) 
    {
    	foreach ($resultado1 as $row) {
		if ($row['Cargo']=='Administrador') {

		header("location:../plataforma/plataforma.html");
		}
			if ($row['Cargo']=='Vendedor') {

		header("location:../plataforma/plataformav.html");
		}

		if ($row['Cargo']=='Seguridad') {

		header("location:../plataforma/plataformas.html");
		}	


    	}  
    }

       else
        {
            header("location:index.html");
        }
           
        

        
       
    
?>

