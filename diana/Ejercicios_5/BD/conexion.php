<?php
	class conexion{
	
	 public $enlace;

	 function __construct(){
	 $this->enlace=mysql_connect('localhost','root','');
	 mysql_select_db('sistemaescolar', $this->enlace);
	}
	function __destruct(){
		mysql_close($this->enlace=mysql_connect('localhost','root',''));
	} 
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> origin/master
