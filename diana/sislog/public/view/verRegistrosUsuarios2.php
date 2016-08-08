<?php

session_start();

if(isset ($_SESSION['id'])) {


 

   ?>


<html>
    <head>
        <meta charset="UTF-8">
		
	<link rel="icon" href="../../bootstrap/img/cf.png">
        <title>Ver Registros</title>
        <link rel="stylesheet" type ="text/css" href="css/wish_list.css">
        <link rel="stylesheet" type ="text/css" href="css/tabla.css">
		<!-- Custom CSS -->
		<link href="../../bootstrap/css/business-casual7.css" rel="stylesheet">
    </head>
    <body>
     <a href ="gerentepage.php" class = "uno">Volver...</a>  
	<center>
        
		<div class="container">

       <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <center><hr>
                    <h2 class="intro-text text-center">Registros
                        <strong> Actuales de Usuarios</strong>
                    </h2>
                    <hr></center>
					
					
                </div>
				<!-- /.Conexion SELECT con bd..mostrar registros-->
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

				?>
						<table class="rwd-table" border="9" width=100% >
						<tr>
							<td><b>ID</b></td>
							<td><b>Nombre del Usuario</b></td>
							<td><b>User Name</b></td>
							<td><b>Password</b></td>
							<td><b>Privilegios de Usuario</b></td>
						 </tr>
						 
						<?php
						$result = mysqli_query($conexion,"SELECT id,CONCAT(nombre,' ',apellido) as Usuario ,
											 usuario as UserName,password, CASE privilegio
																					WHEN privilegio=2 THEN 'Gerente'
																					WHEN privilegio=1 THEN 'Usuario'
																					ELSE 'Administrador'
																					END as Privilegios
									FROM wisher");
						while($row = mysqli_fetch_assoc($result)){ ?>
						 <tr>
							<td><?php echo $row["id"];?></td>
							<td><?php echo $row["Usuario"];?></td>
							<td><?php echo $row["UserName"];?></td>
							<td><?php echo $row["password"];?></td>
							<td><?php echo $row["Privilegios"];?></td>
						 </tr>
						
						<?php 
						}
						
						?>
						
						</table>
				
				
				
				 </div>
                <!-- /.Fin de la conexión -->
               	
               
			   
			   
			   
			   
                <div class="clearfix"></div>
            </div>
        </div>
    </center>
	<br>
	<br>
	<center>
	<footer>
			<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><i>Copyright &copy; Diana Carrizales - Sistema de Login 2016</i></p>
                </div>
            </div>
        </div>
		</footer>
		</center>
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

<?php

}else{

    echo "Debes iniciar sesion antes de entrar a esta pagina";
    
    

}


?>