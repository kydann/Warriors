<?php
//cadena de conexion con postgres
$cadena ="host='localhost' port='5432' dbname='licencias1' user='postgres' password='12345'";
//usar funcion pg_connect
$con = pg_connect($cadena) or die("Error de la conexion.".pg_last_error());
echo"conexion exitosa <hr/>";

//consulta sql
$sql= "SELECT nombre,email
       From clientes";
//ejecutar sentencia sql con pg_connect
$result = pg_query($sql) or die("error query.". pg_last_error());
//obtener num resultados con pg_num_rows
$cont = pg_num_rows($result);
//recorrer con while los resultados obtenidos
echo "<ul>";
while($row = pg_fetch_array($result,null,PGSQL_ASSOC))//{
  //$row2=pg_fetch_array($result2,null,PGSQL_ASSOC);

{
  echo "<li><strong>".$row["nombre"]."</strong>,".$row["email"]."</li>";

}
