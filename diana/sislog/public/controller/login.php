<?php

include ("../model/wish.php");

$user = $_POST['usuario'];
$pass = $_POST['pass'];  


$wish = new wish(); 
$wish -> login($user , $pass); 
 


?>