<?php
	session_start();

	// Error Reporting
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	// Include Parameters
	include_once("conn.php");

	$conn = new mysqli("localhost", "root", "", "diamant")
		or die("Impossible de se connecter : " . mysql_error());

	require_once "authCookieSessionValidate.php";
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

	<meta http-equiv="cache-control" content="no-cache"> <!-- tells browser not to cache -->
	<meta http-equiv="expires" content="0"> <!-- says that the cache expires 'now' -->
	<meta http-equiv="pragma" content="no-cache"> <!-- says not to use cached stuff, if there is any -->
<style type="text/css">
	#rech{ border :solid gray 1px; 
		padding-left: 550px;
		
	}
	.p{
		width: 200px;
		height: 200px;
	}
</style>
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
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="http://localhost/Diamond/" class="site-logo">
							<img src="img/logo2.png" alt="">
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form" method="GET">
<input type="text" placeholder="Search of products" name="search"/>
<button><i class="flaticon-search"></i></button>
</form>
					</div>
					<div class="col-xl-4 col-lg-5">

						<?php if ($isLoggedIn){

							require_once "Auth.php";

							$auth = new Auth();


							if(!empty($_SESSION["member_id"])){
								$user = $auth->getMemberById($_SESSION["member_id"]);
								$username = $user[0]["login"];
							}
							else {
								$username = $_COOKIE["member_login"];
							}

							echo "<div class=\"user-panel\">";
							echo "<div class=\"up-item\">";
							echo "<p> Welcome ". $username ." !</p>";
							echo "</div>";
							echo "<div class=\"up-item\">";
							echo "<form action=\"logout.php\">";
							echo "<button type=\"submit\" class=\"btn btn-dark\">Log out</button>";
							echo "</form>";
							echo "</div>";
							echo "<div class=\"up-item\">";
							echo "<p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>";
							echo "</div>";
							echo "<div class=\"up-item\">";
							echo "<div class=\"shopping-card\">";
							echo "<i class=\"flaticon-bag\"></i>";
							echo "<span>".$auth->getNumberOfItemsByUsername($username)."</span>";
							echo "</div>";
							echo "<a href=\"cart\"> Cart</a>";
							echo "</div>";
					    	echo "</div>";
					    	 }

					    	else{
					    	
					    	echo "<div class=\"user-panel\">";
							echo	"<div class=\"up-item\">";
							echo	"<i class=\"flaticon-profile\"></i>";
							echo	"<a href=\"login\">Sign</a> In or <a href=\"register\">Create Account</a>";
							echo "</div>";
							echo "<div class=\"up-item\">";
							echo	"<div class=\"shopping-card\">";
							echo		"<i class=\"flaticon-bag\"></i>";

							if(isset($_COOKIE["virtual_cart"])){
								echo "<span>". count($_COOKIE["virtual_cart"]) . "</span>";
							}
							else{
								echo		"<span>0</span>";
							}
							echo	"</div>";
							echo	"<a href=\"login\">Shopping Cart</a>";
							echo	"</div>";
					    	echo	"</div>";

					    	}?>
					</div>
				</div>
			</div>
		</div>
				<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="index.php">Home</a></li>
					
					<li><a href="cat.php">Jewelry</a>
						<ul class="sub-menu">
							<li><a  href="cat.php#rings">Rings</a></li>
							<li><a href="cat.php#bracelets">Bracelets</a></li>
							<li><a href="cat.php#necklaces">Necklaces</a></li>
							<li><a href="cat.php#earrings">Earrings</a></li>
						</ul>
					</li>
					<li><a href="catA.php">Accessory </a>
						<ul class="sub-menu">
							<li><a href="catA.php#watches">Watches</a></li>
							<li><a href="catA.php#bags">Bags and purses</a></li>
							<li><a href="catA.php#tiaras">tiaras</a></li>
							<li><a href="catA.php#eyewears">Eyewears</a></li>
						</ul>
					</li>
					<li><a href="gift.php">Gifts
						<span class="new">New</span>
					</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->