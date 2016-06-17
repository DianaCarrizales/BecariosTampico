<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Escolar Ver Registros</title>

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
						<ul>
							<li><a href="modificar.php">Editar</a></li>
							<li><a href="eliminar.php">Borrar</a></li>
								<ul>
									<li><a href="modificar.php">Editar</a></li>
									<li><a href="eliminar.php">Borrar</a></li>
								</ul>
							</li>
						</ul>
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
                    <h2 class="intro-text text-center">Registros
                        <strong> Actuales</strong>
                    </h2>
                    <hr></center>
                </div>
				<!-- /.Conexion SELECT con bd..mostrar registros-->
				<?php 
					  // Devuelve todas las filas de una consulta a una tabla de una base de datos 
					  // en forma de tabla de HTML 
					  function sql_dump_result($result) 
					  { 
						$line = ''; 
						$head = '';
						
					  while($temp = mysql_fetch_assoc($result)) 
					  { 
						if(empty($head)) 
						{ 
						  $keys = array_keys($temp); 
						  $head = '<center><tr><th></center>' . implode('<center></th><th></center>', $keys). '<center></th></tr></center>'; 
						}
						
						$line .= '<center><tr><td></center>' . implode('<center></td><td></center>', $temp). '</center></td></tr></center>'; 
					  }
					  
					  return '<center><table class="rwd-table" border="9" width=100% >' . $head . $line . '</table></center>'; 
					}

					  // Se conecta al SGBD 
					  if(!($iden = mysql_connect("localhost", "root", ""))) 
						die("Error: No se pudo conectar");
						
					  // Selecciona la base de datos 
					  if(!mysql_select_db("sistemaescolar", $iden))
						die("Error: No existe la base de datos"); 
						
					  // Sentencia SQL: muestra todo el contenido de la tabla "alumnos,municipio,estado y programaeducativo" 
					  $sentencia = "SELECT a.Matricula,CONCAT(a.Nombre,' ',a.Apellido) as Alumno ,
											 p.Nombre as Programa,a.Direccion, e.Nombre as Estado,
											 m.Nombre as Municipio
									FROM estados as e 
									INNER JOIN municipios as m on m.EstadoId=e.EstadoId
									INNER JOIN alumnos as a on a.MunicipioId=m.MunicipioId 
									INNER JOIN programaeducativo as p on a.ProgramaId=p.ProgramaId
									ORDER BY Matricula"; 
					  // Ejecuta la sentencia SQL 
					  $resultado = mysql_query($sentencia, $iden); 
					  if(!$resultado) 
						die("Error: no se pudo realizar la consulta");

					  // Muestra el contenido de la tabla como una tabla HTML	
					  echo sql_dump_result($resultado); 
					  
					  // Libera la memoria del resultado
					  mysql_free_result($resultado);

					  // Cierra la conexión con la base de datos 
					  mysql_close($iden); 
				?> 
				
				 </div>
                <!-- /.Fin de la conexión -->
               	
               
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
