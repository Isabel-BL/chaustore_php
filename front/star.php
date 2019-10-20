<?php
session_start();
require_once('/home/isabel/php/v2/admi/connect.php');

if(isset($_POST['connecter']))
{
	if(empty($_POST['email']) || empty($_POST['password'])) 
	{
		echo "Veuillez saisir les champs";
	}
	 else 
	 {
	 	$query= "SELECT * from user WHERE email='".$_POST['email']."' and password='".$_POST['password']."' ";
	 	$result=mysqli_query($conn, $query);

	 	if(mysqli_fetch_assoc($result)) 
	 	{
	 		$SESSION['email']=$_POST['email'] || $SESSION['password']=$_POST['password'];
	 		header("location:wellcome.php");
	 	}

	 	else {
	 			echo " Verifier vos donnes";
	 	}
	 }





} 
?>





