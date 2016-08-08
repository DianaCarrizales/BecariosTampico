

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
                    <h2 class="intro-text text-center">Modificar
                        <strong> Registro</strong>
                    </h2>
                    <hr></center>
                </div>
				
				<!---buscar el registro a modificar-->
					
					<!--<form method="post" action="" align=center>
						Matricula:<br> <br><input type="number_format" name="Matricula" required><br>
						<br>
						<input type="submit" name="buscar" value="Buscar">
					</form>-->
						</select>
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
						  $result = mysqli_query($conexion,"SELECT * FROM alumnos WHERE Matricula='$Matricula'");
						  $row = mysqli_fetch_assoc($result);
						  $result2=mysqli_query($conexion,"SELECT m.Nombre FROM municipios as m INNER JOIN alumnos as a on  m.MunicipioId=a.MunicipioId
															WHERE Matricula='$Matricula'");
						  $row2=mysqli_fetch_assoc($result2);
						  $result3=mysqli_query($conexion,"SELECT p.Nombre FROM programaeducativo as p INNER JOIN alumnos as a on  p.ProgramaId=a.ProgramaId
															WHERE Matricula='$Matricula'");
						  $row3=mysqli_fetch_assoc($result3);
						  
						?>
						<br>
						<form  method="POST" action="update.php" >
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre(s)</label>
                                <input type="text" name=Nombre class="form-control" value="<?php echo $row['Nombre'];?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Apellidos</label>
                                <input type="text" name=Apellido class="form-control" value="<?php echo $row['Apellido'];?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Teléfono</label>
                                <input type="text" name=Telefono class="form-control" value="<?php echo $row['Telefono'];?>">
                            </div>
							<div class="clearfix"></div>
                            <div class="form-group col-lg-4">
                                <label>Dirección</label>
                                <input type="text" name=Direccion class="form-control" value="<?php echo $row['Direccion'];?>">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Correo electrónico</label>
                                <input type="text" name=Email class="form-control" value="<?php echo $row['Email'];?>">
                            </div>
							<div class="form-group col-lg-4">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" name=FechaNacimiento class="form-control" value="<?php echo $row['FechaNacimiento'];?>">
                            </div>
							<div class="clearfix"></div>
                            <div class="form-group col-lg-3">
                                <label>Municipio</label>
                                <select name=MunicipioId class="form-control" value="<?php echo $row['MunicipioId'];?>">
								<option value="<?php echo $row['MunicipioId'];?>"> <?php echo $row2['Nombre'];?> </option>
								<option value=0> ----- Cambia de Municipio ----- </option>
								<option value=1>Abasolo</option>
								<option value=2>Altamira</option>
								<option value=3>Tampico</option>
								<option value=4>Madero</option>
								<option value=5>Allende</option>
								<option value=6>Hidalgo</option>
								<option value=7>Cosio</option>
								<option value=8>Tepezala</option>
								<option value=9>Soliraridad</option>
								</select>
                            </div>
							<div class="form-group col-lg-4">
                                <label>Programa Educativo</label>
                                <select name=ProgramaId class="form-control" value="<?php echo $row['ProgramaId'];?>">
								<option value="<?php echo $row['ProgramaId'];?>"> <?php echo $row3['Nombre'];?> </option>
								<option value=0> ----- Cambia de Programa Educativo ----- </option>
								<option value=1>Ingeniería en Tecnologías de la Información</option>
								<option value=2>Ingeniería en Energías</option>
								<option value=3>Ingeniería en Electrónica y Telecomunicaciones</option>
								<option value=4>Ingeniería Industrial</option>
								</select>
                            </div>
							<div class="form-group col-lg-4">
                                <input type="hidden" name= "Matricula" value="<?php echo $Matricula;?>"> 
                            </div>
                            <center><div class="form-group col-lg-12" padding=5>
                                <input type="submit" value="Actualizar Informacion">
                                <!-- /.<input type="hidden" name="reset" value="contact">
                                <button type="submit" class="btn btn-default">Borrar</button>-->
								<a href="VerRegistros.php"><input align="right" type="button" value="Volver a los Registros"></a>
                            </div></center>
                        </div>
                    </form>
						<!--conectionstrings.com-->
					
				<!--termina-->
				
               
                <div class="clearfix"></div>
            </div>
        </div>
    <!-- /.container -->

   
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
