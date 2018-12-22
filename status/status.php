<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Conoce tu Status</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>

<style>
    .modalDialog {
        position: fixed;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.8);
        z-index: 99999;
        opacity: 0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }

    .modalDialog:target {
        opacity: 1;
        pointer-events: auto;
    }

    .modalDialog > div {
        width: 800px;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background: #fff;
        background: -moz-linear-gradient(#fff, #999);
        background: -webkit-linear-gradient(#fff, #999);
        background: -o-linear-gradient(#fff, #999);
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
    }

    .close {
        background: #606061;
        color: #FFFFFF;
        line-height: 25px;
        position: absolute;
        right: -12px;
        text-align: center;
        top: -10px;
        width: 24px;
        text-decoration: none;
        font-weight: bold;
        -webkit-border-radius: 12px;
        -moz-border-radius: 12px;
        border-radius: 12px;
        -moz-box-shadow: 1px 1px 3px #000;
        -webkit-box-shadow: 1px 1px 3px #000;
        box-shadow: 1px 1px 3px #000;
    }

    .close:hover {
        background: #00d9ff;
    }
</style>

<?php
$usuario = "root";
$password = "kydann2135";
$servidor = "localhost";
$basededatos = "licencias";
$conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la base de datos");
$consulta = "SELECT * FROM licencia";
$resultado = mysqli_query($conexion, $consulta) or die ("Algo ha ido mal en la consulta a la base de datos");
?>

<body background="mountain.jpg">
<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>Warriors labs<br> Licenses</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span>soporte@warriorsdefender.com</p>
            <p><span class="fa fa-mobile"></span>52 55 5579 2273</p>
        </section>
    </section>

    <form method="POST" class="form_contact">

        <center><h2>License Status</h2></center>

        <div class="user_info">

            <center><label for="names">Ingresa tu Codigo</label></center>

            <input type="text" id="names" name="name">

            <?php
            if ($columna['codigo'] == $POST['name']) {
                while ($columna = mysqli_fetch_array($resultado)) { ?>
                    <div id="openModal" class="modalDialog">
                        <div>
                            <a href="#close" title="Close" class="close">X</a>
                            <center><h2>Status Actual</h2></center>
                            <br>
                            <table width="100%">
                                <tr>
                                    <td>Nombre</td>
                                    <td>e-mail</td>
                                    <td>fecha inicio</td>
                                    <td>fecha inicio</td>
                                    <td>Tipo de licencia</td>
                                </tr>
                                <tr>
                                    <td><?php echo $columna['nombre'] ?></td>
                                    <td><?php echo $columna['email'] ?></td>
                                    <td><?php echo $columna['fecha'] ?></td>
                                    <td><?php echo $columna['fecha'] ?></td>
                                    <td><?php echo $columna['licencia'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                <?php } ?>

                <center><a href="#openModal"><input type="button" value="Validar" id="btnSend"></a></center>

            <?php } else { ?>

                <center><input type="button" value="Validar" id="btnSend"></center>

            <?php } ?>

            <center><a class="boton_2" href="../pagina_principal/index.php">Regresar</a></center>
        </div>
    </form>
</section>
</body>
</html>
