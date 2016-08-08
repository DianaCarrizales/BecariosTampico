<?php
include ("../model/wish.php");
$title = $_POST['title'];
$deseo = $_POST['deseo']; 
$wish = new wish(); 
$wish->edit($title,$deseo);
?>
