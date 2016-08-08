<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
	
	<link rel="icon" href="../../bootstrap/img/cf.png">
        <meta charset="UTF-8">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/delete_wish.css">
		<!-- Custom CSS -->
		<link href="../../bootstrap/css/business-casual5.css" rel="stylesheet">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>       
    <div class ="delete">   
        <form action ="../controller/drop.php" method ="POST">
            <h1 color="white"><i>¿Que Pensamiento Quieres Eliminar?</i></h1>
			<br>
              <p>Titulo Del Pensamiento</p><input type = "text" id ="jax" name="title">
              <table>
                  <center><td><input type="reset" value="Limpiar" class ="uno"></td><td> <input type="submit" value="Eliminar" class="uno"></center></td>
              </table>
        </form>     
    </div>  
    </center>
    </body>
</html>
<?php
}else{ 
    echo "Debes iniciar sesion antes de acceder a esta pagina";  
}
?>
