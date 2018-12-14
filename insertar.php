<?php
//cadena de conexion con postgres
$cadena ="host='localhost' port='5432' dbname='licencias1' user='postgres' password='12345'";
//usar funcion pg_connect
$con = pg_connect($cadena) or die("Error de la conexion.".pg_last_error());
echo"conexion exitosa <hr/>";


$nombre =$_POST["nombre"];
$email =$_POST["email"];
pg_query ("INSERT INTO clientes (nombre, email) VALUES ('$nombre', '$email')");

echo "¡Los datos fueron ingresados.\n";
