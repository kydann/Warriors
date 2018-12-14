<?php
    // Datos de la base de datos
	$usuario = "root";
	$password = "kydann2135";
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

	$consultaCl = "SELECT * FROM clientes";
    $consultaLi = "SELECT * FROM licencias";

    $insertClient = "INSERT INTO clientes (nombre, email) VALUES ('$nombre', '$email')";

    while($clientes = mysqli_fetch_array($consultaCl)) {
        $id = $clientes['idcliente'];
        $insertLicence = "INSERT INTO licencias (idcliente,nombre,fecha_de_inicio) values ('$id','$licencia','$fecha')";
    }
	// establecer y realizar consulta. guardamos en variable.
	$resultado = mysqli_query( $conexion, $consultaCl ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	//Insersiones a BD
    $var = mysqli_query($conexion, $insertClient) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $var1 = mysqli_query($conexion, $insertLicence) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// cerrar conexión de base de datos
	mysqli_close( $conexion );
	header("location: formulario.php");
?>