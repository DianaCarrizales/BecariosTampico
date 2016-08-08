<!DOCTYPE html>
<html >

<head>
	<link rel="icon" href="../../bootstrap/img/cf.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema Escolar Modificar Registro</title>

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

    

    <div class="container">

       <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <center><hr>
                    <h2 class="intro-text text-center">Modificar
                        <strong> Registro de Usuario</strong>
                    </h2>
                    <hr></center>
                </div>
				
				<!---buscar el registro a modificar-->
					
					<!--<form method="post" action="" align=center>
						id:<br> <br><input type="number_format" name="id" required><br>
						<br>
						<input type="submit" name="buscar" value="Buscar">
					</form>-->
						</select>
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
						  $result = mysqli_query($conexion,"SELECT * FROM wisher WHERE id='$id'");
						  $row = mysqli_fetch_assoc($result);
						  
						  $result2 = mysqli_query($conexion,"SELECT p.Nombre FROM privile as p
																INNER JOIN wisher as w on w.privilegio=p.ID WHERE w.id='$id'");
						    $row2 = mysqli_fetch_assoc($result2);
						  
						?>
						<br>
						<form  method="POST" action="update.php" >
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nombre(s): </label>
                                <input type="text" readonly="readonly" name=nombre class="form-control" value="<?php echo $row['nombre'];?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Apellido:</label>
                                <input type="text" name=apellido readonly="readonly" class="form-control" value="<?php echo $row['apellido'];?>">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>User Name: </label>
                                <input type="text" name=usuario readonly="readonly" class="form-control" value="<?php echo $row['usuario'];?>">
                            </div>
							<div class="clearfix"></div>
                            <div class="form-group col-lg-4">
                                <label>Password:</label>
                                <input type="text" name=password readonly="readonly" class="form-control" value="<?php echo $row['password'];?>">
                            </div>				
                            <div class="form-group col-lg-3">
                                <label>Privilegio de Usuario:</label>
                                <select name=privilegio class="form-control" value="<?php echo $row['privilegio'];?>">
								<option value="<?php echo $row['privilegio'];?>"> <?php echo $row2['Nombre'];?> </option>
								<option value=0> ----- Cambia de privilegio ----- </option>
								<option value=3>Administrador</option>
								<option value=0>Gerente</option>
								<option value=1>Usuario</option>
								</select>
                            </div>
							
							<div class="form-group col-lg-4">
                                <input type="hidden" name= "id" value="<?php echo $id;?>"> 
                            </div>
                            <center><div class="form-group col-lg-12" padding=5>
                                <input type="submit" value="Actualizar Informacion">
                                <!-- /.<input type="hidden" name="reset" value="contact">
                                <button type="submit" class="btn btn-default">Borrar</button>-->
								<a href="verRegistrosUsuarios.php"><input align="right" type="button" value="Volver a los Registros"></a>
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
