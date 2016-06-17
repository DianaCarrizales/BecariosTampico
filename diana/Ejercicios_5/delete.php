<?php
	 // Se conecta al SGBD 
	if(!($iden = mysql_connect("localhost", "root", ""))) 
	die("Error: No se pudo conectar");
		
	// Selecciona la base de datos 
	 if(!mysql_select_db("sistemaescolar", $iden))
		die("Error: No existe la base de datos");

	$sentencia=("DELETE FROM alumnos WHERE Matricula='$_POST[Matricula]'");
	 $resultado = mysql_query($sentencia, $iden); 
		if(!$resultado) 
			die("Error: no se pudo realizar la consulta");	
		else
			("Registro actualizado correctamente :)");
		
						
		 // Cierra la conexión con la base de datos 
		 mysql_close($iden); 
	
?>

<!DOCTYPE html>
<html lang="en">

<head>

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
	</head>

<body>

    <div class="brand">Universidad Politécnica de Altamira</div>
    <div class="address-bar">Nuevo Libramiento Altamira Km. 3,Santa Amalia,89605 Altamira, Tamps</div>
	
	<div class="row" >
            <div class="box">
                <div class="col-lg-12">
                     <center><hr></center>
                    <h2 class="intro-text text-center">Felicidades.
                        <strong> Su registro ha sido Eliminado.</strong>
                    </h2>
                    <center><hr></center>
					<center><img src="img/cf.png"></img></center>
					<center><p><a href="VerRegistros.php"><h2><i>Ver los Registros</i><h2></a></center>
                </div>
            </div>
        </div>
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