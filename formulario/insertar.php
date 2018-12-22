<?php
// Datos de la base de datos
$usuario = "root";
$password = "kydann2135";
$servidor = "localhost";
$basededatos = "licencias";
// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");
// Selección del a base de datos a utilizar
$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la base de datos");

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

$consultaLi = mysqli_query($conexion, "SELECT * FROM licencias");

$insertLicence = "INSERT INTO licencia(nombre, email, fecha, licencia, codigo) VALUES ('$nombre','$email','$fecha','$licencia','$codigo')";

//Insersiones a BD
$var1 = mysqli_query($conexion, $insertLicence) or die ("Algo ha ido mal en la consulta a la base de datos");

// cerrar conexión de base de datos
mysqli_close($conexion);

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