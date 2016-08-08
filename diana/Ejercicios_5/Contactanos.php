<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Escolar Contacto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:5px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				
				list-style:none;
			}
			
			.nav li a {
				background-color:#F4F1F1;
				color:Black;
				text-decoration:none;
				padding:15px 20px;
				display:block;
			}
			
			
			.nav li a:hover {
				background-color:#DCD9D9;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:212px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				background-color:#F4F1F1;
				color:black;
				text-decoration:none;
				display:block;
				padding:0px 0px;
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>

</head>

<body>

    <div class="brand">Universidad Politécnica de Altamira</div>
    <div class="address-bar">Nuevo Libramiento Altamira Km. 3,Santa Amalia,89605 Altamira, Tamps</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Barra de navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Universidad Politécnica de Altamira</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                 <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="Registrarse.php">Registrarse</a>
                    </li>
                    <li>
                        <a href="VerRegistros.php">Ver Registros</a>
                    </li>
					<li>
                        <a href="Contactanos.php">Contactanos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <center><hr>
                    <h2 class="intro-text text-center">Contáctanos.
                        <strong> Conoce sobre nosotros.</strong>
                    </h2>
                    <hr></center>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1717.2249913132002!2d-97.97164794609444!3d22.462836593534455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86780864b7af314f%3A0xa6c884b42dfb617c!2sUniversidad+Politecnica+de+Altamira!5e1!3m2!1ses!2smx!4v1465876437267" width="600" height="450" frameborder="0" style="border:0" allowfullscreen"></iframe>
                </div>																										
                <div class="col-md-4">
					<br>
					<br>
					<br>
                    <p>Teléfono:
                        <strong>833-304-0474</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@example.com">contacto@upalt.edu.mx</a></strong>
                    </p>
                    <p>Dirección:
                        <strong>Nuevo Libramiento Altamira KM 3. Santa Amalia, Altamira, Tamps. C.P. 89602</strong>
                    </p>
					<p>Fax:
                        <strong>833-3040474 ext. 1011</strong>
                    </p>
					<p>Facebook:
                        <strong><a href="https://www.facebook.com/universidad.politecnicadealtamira">Universidad Politecnica de Altamira</a></strong>
                    </p>
					<p>Twitter:
                        <strong><a href="https://twitter.com/upalt">https://twitter.com/upalt</a></strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        
    <!-- /.container -->

    <footer>
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center" >
                    <p><i>Copyright &copy; Diana Carrizales - Sistema Escolar ABCC 2016</i></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
