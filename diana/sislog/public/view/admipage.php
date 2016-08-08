<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<HTML>
<HEAD>

<link rel="icon" href="../../bootstrap/img/cf.png">

	<TITLE>Págian de Inicio</TITLE>
		<meta charset = "UTF-8"> 
		

		<LINK REL = "stylesheet" type = "text/css" href = "css/menu.css" > 
		<LINK REL = "stylesheet" type = "text/css" href = "css/add_wish.css" > 
		<!-- Bootstrap Core CSS -->
		<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="../../bootstrap/css/business-casual6.css" rel="stylesheet">

		<!-- Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
		</HEAD>
		
		<body>
		<a href ="../index.php" class = "uno">Cerrar Sesion...</a>
		<br>
			<p align="center" id ="title">Bienvenido 
			<?php
			echo $_SESSION['name'] ;
			echo " " ;
			echo $_SESSION['apellido'];
			?>
			 <br><center><h1><i>Querido Administrador</i></h1></center></p>
			
	<header>
			<div class = "contenedor" id = "seis"> 
				
			</div>
			<div class = "contenedor" id = "dos"> 
				<a href = "verRegistrosUsuarios.php">
				<img class = "icon" src="image/agregar.png">
				<br>
				<p class = "parrafo">Ver los Usuarios</p>
			</a>
			</div>
			<div class = "contenedor" id = "tres"> 
				<a href = "verRegistrosPensamientos.php">
				<img class = "icon" src="image/consult.png">
				<br>
				<p class = "parrafo">Ver los Pensamientos</p>
				</a>
			</div>
			<div class = "contenedor" id = "cinco"> 
				
			</div>
	</header>
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
</HTML>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>