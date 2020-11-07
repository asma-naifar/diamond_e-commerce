<?php
	session_start();
	require_once "Auth.php";
	require_once "Util.php";

	$db_handle = new DBController();
	$auth = new Auth();

	require_once "authCookieSessionValidate.php";


	$idCart = $_GET["cart"];
	$idItem = $_GET["ref"];

	$auth->deleteItem($idCart, $idItem);
	header('Location: ' . $_SERVER["HTTP_REFERER"] );
	
	
?>