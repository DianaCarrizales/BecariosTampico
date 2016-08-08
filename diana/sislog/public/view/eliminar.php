
<!DOCTYPE html>
<html >

<head>
	<link rel="icon" href="../../bootstrap/img/cf.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema de login Modificar Registro</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../bootstrap/css/business-casual6.css" rel="stylesheet">
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
		

</head>

<body>
<br>
<br>
<br>
<br>
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
							$bd= "wisher";

								$conexion=new mysqli($s,$u,$pw,$bd);

							if($conexion -> connect_errno){

								echo "No conectado";
							}
							else{
								
								//echo "conectado";
							}

						  $id=$_GET['id'];
						  $result = mysqli_query($conexion,"SELECT id FROM wisher WHERE id='$id'");
						  $row = mysqli_fetch_assoc($result);
						?>
						<form  method="POST" action="delete.php" align=center>
                        <div class="row">
							<div class="form-group col-lg-4">
                                <label>Identificador de Usuario</label>
                                <input name=id readonly="readonly" class="form-control" value="<?php echo $id;?>">
                            </div>
							<div class="form-group col-lg-3">
								<center><img src="../../bootstrap/img/el.png" width=50%></img></center>
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
								<a href="verRegistrosUsuarios.php"><input align="right" type="button" value="Volver a los Registros"></a>
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
                    <p><i>Copyright &copy; Diana Carrizales - Sistema de login 2016</i></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="../../bootstrap/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
