<?php
//cadena de conexion con postgres
$cadena ="host='localhost' port='5432' dbname='licencias1' user='postgres' password='12345'";
//usar funcion pg_connect
$con = pg_connect($cadena) or die("".pg_last_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Informacion del cliente</title>

    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
	<div id="main-container">
		<table>
			<thead>
				<tr>
					<th>Nombre del cliente</th>
					<th>Email</th>
					<th>Licencia</th>
					<th>Fecha inicio</th>
					<th>Fecha final</th>
				</tr>
       <?php
			 $sql= "SELECT nombre,email
       From clientes";
       $result = pg_query($sql) or die("error query.". pg_last_error());
       $cont = pg_num_rows($result);
			 while($row = pg_fetch_array($result,null,PGSQL_ASSOC)){
       ?>
			</thead>
			<tr>
				<td><?php echo $row["nombre"]?></td>
				<td><?php echo $row["email"]?></td>
				<td></td>
			</tr>
			<?php
		}
			 ?>
		</table>
	</div>
	<div>
<a class="boton_2" onclick="javascript:window.close();">Salir</a>
 </div>
 </div>
</body>
</html>
