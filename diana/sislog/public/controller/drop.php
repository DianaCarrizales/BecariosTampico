<?php
include ("../model/wish.php");
$title = $_POST['title'];
$wish = new wish(); 
$wish->drop($title);
?>