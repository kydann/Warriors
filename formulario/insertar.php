<?php
    // Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "Baselicencias1";
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	$nombre =$_POST["nombre"];
    $email =$_POST["email"];
    $fecha =$_POST["fecha"];
    $licencia =$_POST["licencia"];

	$consultaCl = mysqli_query($conexion,"SELECT MAX(idcliente) FROM clientes");
    $consultaLi = mysqli_query($conexion,"SELECT MAX(idlicencia) FROM licencias");

    $insertClient = "INSERT INTO clientes (nombre, email) VALUES ('$nombre', '$email')";

    $valor = $valor+$consultaCl;

    $insertLicence = "INSERT INTO licencias(idcliente,nombre,fecha_de_inicio,fecha_final) VALUES('$valor','$licencia','$fecha','$fecha')";

	//Insersiones a BD
    $var = mysqli_query($conexion, $insertClient) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $var1 = mysqli_query($conexion, $insertLicence) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
	echo "Exito";
	header("location: formulario.php");
?>