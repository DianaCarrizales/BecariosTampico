<?php
session_start();
session_destroy();
?>
<html>
<head>
	
	<link rel="icon" href="../../bootstrap/img/cf.png">
	<meta charset="UTF-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title> Inicio </title>
	
	<link href ="css/login.css" rel ="stylesheet" type ="text/css">
	
	<!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../bootstrap/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<section id="Formulario">
<center><h1> Iniciar Sesión </h1></center>
<br>
<br>	
<div class ="login">
<form action ="../controller/login.php" method= "POST" > 
<center>    
    <fieldset>       
        <legend>Login</legend>	
		<p>
                    <input title = "Se necesita el nombre de usuario" type = "text" name = "usuario" placeholder = "usuario" required>
                </p> 
                <p>
                    <input  title = "Se necesita la contraseña" type = "password" name = "pass" placeholder = "password" required>
                </p> 
                <p>
                   <input  type = "submit" value = "Entrar"> 
                   <input  type = "reset" value = "Limpiar"> 
                </p>               
                <p>
					¿No tienes una cuenta?
                    <a href ="crear.php">
                        Crear una. Es muy Fácil.
                    </a>
					Siempre seras Bienvenido.
                </p>
</fieldset>
</center>
</form>	
</div>
</section>


<br>

<br>
<br>
<br>
	 <footer>
			<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><i>Copyright &copy; Diana Carrizales - Sistema de Login 2016</i></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="../../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>
