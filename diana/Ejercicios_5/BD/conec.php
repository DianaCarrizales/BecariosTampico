<?php
	//haremos uso de esta función cada ves que deseamos conectarnos a la base de datos.
		function Conectar(){
		$link = mysql_connect("localhost","root","");
		return $link;
		}

		function Desconectar($link){
		mysql_close($link);
		}
?>