<!--php database connection-->
<?php
	
	error_reporting(1);
	include("connection.php");
	session_start();

	if(isset($_POST['login'])){
		// $_SESSION['username'] = $_POST['username'];
		$username = $_POST['username'];
		// $_SESSION['password'] = $_POST['password'];
		$password = $_POST['password'];
		$query = mysqli_query($con, "SELECT username, password FROM customer WHERE username='$username'");
		$arr = mysqli_fetch_array($query);

		if($arr['username']==$username && $arr['password']==$password){
			$_SESSION['username']=$arr['username'];
			header('location: home.php');
		}
		else{
			$er = "Username or password do not match. Try again!";
		}
	}
?> 
<!--end php database connection-->

<?php
	//header.php
	include("header.php");
?>


	<!-- login form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<div id="form_status"></div>
						<div class="contact-form">
							<form method="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
								<p class="log-in-username">
									<label for="name">Username</label> <br>
									<input type="text" placeholder="" name="username" id="name">
								</p>
								<p class="log-in-username">
									<label for="password">Password</label> <br>
									<input type="password" placeholder="" name="password" id="password" >
								</p>
								<input type="submit" value="Log In" name="login">
							</form>
						</div>
					</div>	
				
					<div class="col-lg-4">
							<div class="form-title">
								<h2>Have you already Register?</h2>
								<p>
									If you haven't register, <br> please  go to fill the form and register now! <br> <br>
									<a href="register.php" class="register-log-in">Register</a>
								</p>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end login form -->
	
<?php
	//footer.php
	include("footer.php");
?>