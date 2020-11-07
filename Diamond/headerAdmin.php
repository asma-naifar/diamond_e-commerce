<?php

	// Error Reporting
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Include Parameters
	include_once("conn.php");

	$conn = new mysqli("localhost", "root", "", "diamant")
		or die("Impossible de se connecter : " . mysql_error());

	// Start Session
	session_start();
?>

<!DOCTYPE html>
<html lang="english">
<head>
	<title>Diamond</title>
	<meta charset="UTF-8">
	<!-- Favicon -->
	<link href="img/favicon.png" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	

	<!-- Header section -->