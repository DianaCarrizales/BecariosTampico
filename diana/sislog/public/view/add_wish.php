<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
	
	<link rel="icon" href="../../bootstrap/img/cf.png">
        <meta charset="UTF-8">
        <title>Agregar Pensamiento</title>
        <link rel="stylesheet" type ="text/css" href="css/edit_wish.css">
		<!-- Custom CSS -->
		<link href="../../bootstrap/css/business-casual5.css" rel="stylesheet">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>    
    <div class ="maik">   
        <form action ="../controller/add_wish.php" method ="POST">
            <h3 class = "title">Agrega Tu Pensamiento...</h3>
            <p>Titulo Del Pensamiento</p><input title="Se necesita el titulo del Pensamiento" type = "text" id ="jinx" name="title" required>
                <div><textarea name ="deseo" rows="12" cols="50"  id="area" title ="Ingresa el Pensamiento " required  ></textarea></div>
                <input type="reset" value="Limpiar" class ="uno"> <input type="submit" value="Agegar" class="uno">
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
