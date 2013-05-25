<?php

	session_start(); //debut de session

	$page = null;
	
	if(isset ($_GET['page'])) //inclut les pages=
	{
		$page = $_GET['page'];
	}
	
	$action = null;
	
	if(isset ($_GET['action'])) //inclut les action=
	{
		$action = $_GET['action'];
	}
	
	if(file_exists('actionGroup/templates.php'))
	{
		include 'actionGroup/templates.php'; //inclut le controlleur.
	}
	
	include 'views/main.php'; // inclut la page d'accueil du site.

?>