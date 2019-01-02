<!DOCTYPE HTML>
<html>
<head>
    <title>Contrato de license</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Resort Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <link rel="stylesheet" href="css/burguer.css"/>
    <!-- Fuentes de Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lobster:400" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Fin Fuentes de Google Fonts -->

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>

    <script>
        function letras(e) {
            key = e.keyCode
        }
    </script>
</head>

<body>

<!-- Hack Para Desplegar el Menú activando un checkbox -->
<input type="checkbox" class="checkbox" id="menu-toogle"/>
<label for="menu-toogle" class="menu-toogle"></label>
<nav class="nav">
    <a href="#" class="nav__item current">Menu</a>
    <a href="#" class="nav__item">Ver Status de licencia</a>
    <a href="../pagina_principal/index.php" class="nav__item">Ir a pagina principal</a>
</nav>

<h1>Contrato de licencia</h1>
<form method="POST" action="insertar.php">
    <div class="bg-agile">
        <div class="book-appointment">
            <h2>Ingresar datos </h2>
            <div class="book-form agileits-login">
                <div class="agileits_reservation_grid">
                    <div class="phone_email1">
                        <div class="form-text">

                            <div class="form-text">
                                <i class="fas fa-address-card" aria-hidden="true"></i>
                                <input type="text" name="nombre" placeholder="Cliente/Empresa" required="required">
                            </div>

                            <div class="form-text">
                                <i class="far fa-file-alt" aria-hidden="true"></i>
                                <input type="text" name="rfc" placeholder="RFC" required="required">
                            </div>

                            <div class="form-text">
                                <i class="fas fa-envelope-square" aria-hidden="true"></i>
                                <input type="text" name="email" placeholder="Email" required="required">
                            </div>

                            <div class="book_date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <input id="datepicker" name="fecha" type="date" placeholder="Fecha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}">
                            </div>

                            <div class="form-text">
                                <i class="fas fa-address-card" aria-hidden="true"></i>
                                <select id="country" name="licencia" onchange="change_country(this.value)"
                                        class="frm-field required" style="Text-align:center;">
                                    <option value="">Tipo de licencia</option>
                                    <option value="Demo">Demo</option>
                                    <option value="Licencia_Standar">Licencia Standart</option>
                                    <option value="Licencia_Full">Licencia Full</option>
                                    <option value="Licencia_Premium">Licencia Premium</option>
                                </select>
                            </div>
                        </div>
                        <div class="section_room">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <select id="country1" onchange="change_country(this.value)" class="frm-field required">
                                <option value="">Tiempo</option>
                                <option value="">30 dias</option>
                                <option value="">1 año</option>
                                <option value="">2 años</option>
                                <option value="">3 años</option>
                            </select>
                        </div>
                    </div>
                    <div class="phone_email"></div>
                    <div class="phone_email1"></div>
                </div>
                <div class="clear"></div>
                <center>
                    <button type="submit" name="contratar" value="Contratar">Contratar</button>
                </center>
                <div class="clear"></div>
            </div>
            <a href="../pagina_oficial/index.php"><img src="Imagenes/f1.png" width="25"
                                                       height="25"></a>
        </div>
    </div>
    </div>
</form>
</body>
</html>
