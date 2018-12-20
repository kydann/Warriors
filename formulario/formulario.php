<!DOCTYPE HTML>
<html>
<head>
<title>Contrato de license</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/jquery-ui.css" />

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
	<script>
		$(function(){
			$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
	  	});
  	</script>
</head>
<body>
	<h1>Contrato de licencia</h1>
    <form method="POST" action="insertar.php">
   	<div class="bg-agile">
		<div class="book-appointment">
		<h2>Ingrese sus datos <a href="../pagina_principal/index.php"><img src="Imagenes/f1.png" width="25" height="25"></a> </h2>

			<div class="book-form agileits-login">
            		<div class="agileits_reservation_grid">
		           	 	
                        <div class="phone_email1">
		                  	
                            <div class="form-text">
		                    	<i class="fas fa-address-card" aria-hidden="true"></i>
		                    	<input type="text" name="nombre" placeholder="Cliente/Empresa" required="">

                                <div class="form-text">
                                    <i class="fas fa-envelope-square" aria-hidden="true"></i>
                                    <input type="text" name="email" placeholder="Email" required=""><p>
                                </div>

                                <div class="book_date">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <input  id="datepicker" name="fecha" type="date" placeholder="Fecha"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}">
                                    <p>
                                </div>

                                <div class="form-text">
                                    <i class="fas fa-address-card" aria-hidden="true"></i>
                                    <select id="country" name="licencia" onchange="change_country(this.value)" class="frm-field required" style="Text-align:center;">
                                        <option value="">Tipo de licencia</option>
                                        <option value="Licencia_Standar">Licencia Standart</option>
                                        <option value="Licencia_Full">Licencia Full </option>
                                        <option value="Licencia_Premium">Licencia Premium</option>
                                    </select>
                                </div>
				            </div>
						<div class="phone_email"></div>
			         	<div class="phone_email1"></div>
                        </div>
                        <div class="clear"></div>
                        <input type="submit" name="contratar" value="Contratar">
                        <div class="clear"></div>
					</div>
			</div>
		</div>
    </div>
    </form>
</body>
</html>
