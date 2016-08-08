<html>
    <head>
	
		<link rel="icon" href="../../bootstrap/img/cf.png">
        <title>Crear cuenta</title>
        <meta charset= "UTF-8">
		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
        <link href ="css/login.css" rel ="stylesheet" type ="text/css">
		
		<!-- Bootstrap Core CSS -->
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="../../bootstrap/css/business-casual2.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    </head>
    <body>       
    <center><h1>Registrar Usuario</h1></center>
        <div class ="login">
            <form action ="../controller/crear.php" method ="POST">
            <fieldset>
                <legend>Crear cuenta</legend> 
            <table>
                <tr>
                    <td><input title="Es necesario un nombre de usuario" type="text" class ="pass" name ="nombre" placeholder="Nombre" required> <input title="Campo obligatorio" class ="pass" type="text" name ="apellido" placeholder="Apellido" required></td>
                </tr>
                <tr>
                    <td><input title="Campo obligatorio" type ="text" name = "usuario" class ="pass" placeholder ="Nombre de usuario" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" name ="pass1" placeholder="Contraseña" required></td>
                </tr>
                <tr>
                    <td><input title ="Campo obligatorio" class="pass" type ="password" name ="pass2" placeholder="Verificar Contraseña" required></td>
                </tr>   
            </table>   
                <input type ="submit" value =" registrarse"  id ="res">
              </fieldset>
            </form>
        </div>
		
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
