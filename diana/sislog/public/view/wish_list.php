<?php

session_start();

if(isset ($_SESSION['id'])) {


 

   ?>


<html>
    <head>
        <meta charset="UTF-8">
		
	<link rel="icon" href="../../bootstrap/img/cf.png">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/wish_list.css">
        <link rel="stylesheet" type ="text/css" href="css/tabla.css">
		<!-- Custom CSS -->
		<link href="../../bootstrap/css/business-casual5.css" rel="stylesheet">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>    
        
    <div class ="maik">   
        
        
            
        
          
            
            <h3 class = "title">Lista De Tus Pensamientos...</h3>
           
            <?php
           

                include ("../model/wish.php");


                $wish = new wish(); 
                


            ?>
            
            <table id="tabla">
           
                <tr>
                    <th>TITULO</th><th>DESCRIPCIÓN</th>
                </tr>
           <?php
           
           
           $wish->wish_list();
           
           
           ?>
        
           
            </table>
            
            
            
   

      
           
    </div>  
    </center>
    </body>
</html>

<?php

}else{

    echo "Debes iniciar sesion antes de entrar a esta pagina";
    
    

}


?>



