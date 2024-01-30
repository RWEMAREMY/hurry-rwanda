<?php
	include('configbuses.php');
	$id=$_GET['id'];
 
	$bus = ( $_POST["bus"]);
	$plate =  $_POST["plate"];
	$time = $_POST["time"];
	$orginal = $_POST["orginal"];
	$destination = $_POST["destination"];
	mysqli_query($conn,"update `buses` set bus='$bus', plate='$plate'time='$time',orginal='$orginal',destination='$destination' where userid='$id'");
	header('buses-admin.php');
?>