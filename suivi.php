<?php

include('../settings.php');
include("../common/sub_includes.php");


if(isset($_POST['login_submit'])){

	if(!isset($_SESSION)){
		session_start();
	}

	$_SESSION["logged"] = true;
	header("Location: ../steps/full.php");


	}

else{
	header('Location: ../');
}


?>