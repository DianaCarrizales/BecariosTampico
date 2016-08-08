

<?php
	include('BD/motor.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="img/logo.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Escolar Modificar Registro</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="BD/conexion.php">
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
		<title>tabla</title>
		<style type="text/css">
			.rwd-table {
			padding-text:8;
			  text-align:center;
			  background:#ECCEF5;
			  color: black;
			  border-radius: .9em;
			  overflow: hidden;
			  cellpadding:8;
			  rules:all;
			  
			  tr {
				border-color: #DF01D7;
			  }
			  th, td {
				margin: .100em 10em;
				@media (min-width: $breakpoint-alpha) { 
				  padding: 6em !important; 
				}
			  }
			  th, td:before {
				color: #000000;
			  }
			}
		</style>
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
                    <span class="sr-only">Barra de Navegación</span>
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
                    <h2 class="intro-text text-center">¿Seguro que desea
                        <strong> Borrar el Registro?</strong>
                    </h2>
                    <hr></center>
                </div>
				
				<!---buscar el registro a eliminar-->
				<center>
				<table align=center width=70%>
				<td>
						<br>
						<center>
						<?php
						  $s= "localhost";
							$u= "root";
							$pw= "";
							$bd= "sistemaescolar";

								$conexion=new mysqli($s,$u,$pw,$bd);

							if($conexion -> connect_errno){

								echo "No conectado";
							}
							else{
								
								//echo "conectado";
							}

						  $Matricula=$_GET['Matricula'];
						  $result = mysqli_query($conexion,"SELECT Matricula FROM alumnos WHERE Matricula='$Matricula'");
						  $row = mysqli_fetch_assoc($result);
						?>
						<form  method="POST" action="delete.php" align=center>
                        <div class="row">
							<div class="form-group col-lg-4">
                                <label>Matricula</label>
                                <input name=Matricula class="form-control" value="<?php echo $Matricula;?>">
                            </div>
							<div class="form-group col-lg-3">
								<center><img src="img/el.png" width=50%></img></center>
                            </div>
							<div class="form-group col-lg-3">
								<label type="hidden">Eliminar el Registro</label>
                                <input type="submit" value="Eliminar Registro">
                            </div>
							<center>
							<div class="clearfix"></div>
							<div class="form-group col-lg-4">
								<label>Si no desea borrar el registro </label>
                            </div>
							<div class="form-group col-lg-3">
								<label> de click aquí ---> </label>
                            </div>
							<div class="form-group col-lg-3">
								<a href="VerRegistros.php"><input align="right" type="button" value="Volver a los Registros"></a>
                            </div>
							</center>
                        </div>
                    </form>
					
				</center>
				</td>
				<td>
					
				</td>
				</table>
				</center>
				<!--termina-->
				
               
                <div class="clearfix"></div>
            </div>
        </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
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
