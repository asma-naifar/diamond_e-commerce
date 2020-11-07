<?php require 'header.php';?>
<br><br>
<?php 

	require_once "Auth.php";
	require_once "Util.php";


	$db_handle = new DBController();
	$auth = new Auth();
	$util = new Util();

	if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["confirmPassword"])){

		$username = $_POST["username"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$userByUsername = $auth->getMemberByUsername($username);
		$userByEmail = $auth->getMemberByEmail($email);
		

		if (!empty($userByUsername[0]["login"])){
			$message = "username taken. try another one !";
		}
		else{
			if (!empty($userByEmail[0]["email"])){
			$message = "account with this email exists";
			}
			else{
				$auth->insertUser($username, $email, $password);
				$userByUsername = $auth->getMemberByUsername($username);
				$_SESSION["member_id"] = $userByUsername[0]["id_client"];
				$auth->initCart($userByUsername[0]["id_client"]);
				if (isset($_POST["selector"])) {

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
					}
				$util->redirect("http://localhost/Diamond/");
				}
				}
			}

	else{
		$message = "Please fill out all the Fields ";
	}

?>
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Already have an account?</h4>
							<p></p>
							<a class="button button-account" href="login">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3><br>
						<form class="row login_form" action="" id="register_form" method="POST">
							<div class="col-md-12 form-group" style="color:#ff6666;font-size:130%;">
								<?php if(isset($message)&&isset($_POST["submit"])) { echo $message; unset($message, $_POST["submit"]);} ?>
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="validate()" >
              				</div>
              				<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="reinitializePasswords();" onkeyup="checkPass(); return false;">
              				</div>
              				<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="reinitializePasswords();"
								onkeyup="checkPass(); return false;">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group" id="error-password">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" name="submit" value="submit" class="button button-register w-100">Register</button>
								<br><br><br>
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