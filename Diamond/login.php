<?php require 'header.php';?>

<?php

require_once "Auth.php";
require_once "Util.php";


$auth = new Auth();
$db_handle = new DBController();
$util = new Util();

require_once "authCookieSessionValidate.php";

if ($isLoggedIn) {
    $util->redirect("http://localhost/Diamond/");
}

if (! empty($_POST["member_name"])) {
    $isAuthenticated = false;
    
    $username = $_POST["member_name"];
    $password = $_POST["member_password"];
    
    $user = $auth->getMemberByUsername($username);
    if (password_verify($password, $user[0]["password"])) {
        $isAuthenticated = true;
    }
    
    if ($isAuthenticated) {
        $_SESSION["member_id"] = $user[0]["id_client"];
        // Set Auth Cookies if 'Remember Me' checked
        if(isset($_POST["remember"])) {
        	
            setcookie("member_login", $username, $cookie_expiration_time);
            
            $random_password = $util->getToken(16);
            setcookie("random_password", $random_password, $cookie_expiration_time);
            
            $random_selector = $util->getToken(32);
            setcookie("random_selector", $random_selector, $cookie_expiration_time);
            
            $random_password_hash = password_hash($random_password, PASSWORD_DEFAULT);
            $random_selector_hash = password_hash($random_selector, PASSWORD_DEFAULT);
            
            $expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);
            
            // mark existing token as expired
            $userToken = $auth->getTokenByUsername($username, 0);
            if (! empty($userToken[0]["id"])) {
                $auth->markAsExpired($userToken[0]["id"]);
            }
            // Insert new token
            $auth->insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date);
        } else {
            $util->clearAuthCookie();
        }
        $util->redirect("http://localhost/Diamond/");
    } else {
        $message = "Invalid Login or Password ";
    }
}
?>
<br><br>
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<h3>Still don't have an account ? </h3>
						<p> sign up for free ! </p>
						<div class="hover">
							 <a class="button button-account" href="register">Create an Account </a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="" method="post" id="frmLogin">
							<div class="col-md-12 form-group">
								<i class="text-danger">
									<?php if(isset($message)) { echo $message; } ?></i>
								
							</div>

							<div class="col-md-12 form-group">
								<input type="text" class="form-control" name="member_name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'"
									value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
							</div>

							<div class="col-md-12 form-group">
								<input type="password" class="form-control" name="member_password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'"
									value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>">
							</div>

							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input id="f-option2" type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>/>

									<label for="f-option2">Remember me</label>
								</div>
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-login w-100">Log In</button>
								<br><br><br>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	</div>
	<!--================End Login Box Area =================-->



  <!--================ Start footer Area  =================-->	
<?php require 'footer.php';?>
