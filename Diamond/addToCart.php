<?php
	session_start();
	require_once "Auth.php";
	require_once "Util.php";

	$db_handle = new DBController();
	$auth = new Auth();

	require_once "authCookieSessionValidate.php";


	$item = $_GET["param"];
	$userId = (int) $_SESSION["member_id"];
	$cart = $auth->getCartIdByMemberId($_SESSION["member_id"]);
	$cartId = $cart[0]["id_panier"];
	$auth->insertItem($item, $cartId);
	header("location:javascript://history.go(-1)");
	
	
?>