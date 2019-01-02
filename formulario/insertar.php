<?php
// Datos de la base de datos
$cadena ="host='localhost' port='5432' dbname='registros' user='postgres' password='12345'";
// creación de la conexión a la base de datos con pg_connect()
$conexion = pg_connect($cadena) or die ("No se ha podido conectar al servidor de Base de datos");
// Selección del a base de datos a utilizar
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = $_POST["fecha"];
$licencia = $_POST["licencia"];

//Genera Codigo de 8 digitos de forma aleatoria
function generarCodigo($longitud)
{
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern) - 1;
    for ($i = 0; $i < $longitud; $i++) $key .= $pattern
    {
    mt_rand(0, $max)
    };
    return $key;
}

//Guarda valor de la funcion que genera codigo de 8 digitos
$codigo = generarCodigo(8);

$consultaLi = pg_query($conexion, "SELECT * FROM datos1");

$insertLicence = "INSERT INTO datos1(nombre, email, fecha_inicio, licencia, codigo) VALUES ('$nombre','$email','$fecha','$licencia','$codigo')";

//Insersiones a BD
$var1 = pg_query($conexion, $insertLicence) or die ("Algo ha ido mal en la consulta a la base de datos");

// cerrar conexión de base de datos
pg_close($conexion);

$to = $email;
$subject = 'Codigo de Validacion Warriors Licences';
$message = '
    <html>
    <head>
        <title>Codigo de Validacion</title>
    </head>
        <body>
        <h1>Hola, para poder ingresar y visualizar los detalles de su licencia podra verificarlo con el codigo que se le proporciona acontinuacion:</h1>
        <br>
        <center><p><b><?php $codigo?></b></p></center>
        </body>
    </html>';

mail($to, $subject, $message);

header("location: formulario.php");
?>
