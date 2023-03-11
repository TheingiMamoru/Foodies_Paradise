<!--php database connection-->
<?php
	
	error_reporting(1);
	ob_start();
	include("connection.php");
	session_start();

	if(isset($_POST['login'])){
		// $_SESSION['username'] = $_POST['username'];
		$username = $_POST['username'];
		// $_SESSION['password'] = $_POST['password'];
		$password = $_POST['password'];
		$a_query = mysqli_query($con, "SELECT * FROM admin_table WHERE a_username='$username';");
		$a_arr = mysqli_fetch_array($a_query);

		if($a_arr['a_username']==$_POST['username'] && $a_arr['a_password']==$_POST['password']){
			$_SESSION['a_username']=$a_arr['a_username'];
			header('location: home.php');
		}
		else{
			$er = $a_arr['a_username'];
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
			<div class="row" align="center">
				<div class="col-lg-12 mb-5 mb-lg-0 px-5">
					<div id="form_status"></div>
						<div class="contact-form">
							<form method="POST" id="fruitkha-contact">
								<p>
									<?php echo $er; ?>
								</p>
								<h2>Please Login as Admin</h2>
								<p class="log-in-username">
									<input type="text" name="username" id="name">
								</p>
								<p class="log-in-username">
									<input type="password"  name="password" id="password" >
								</p>
								<input type="submit" value="Log In" name="login">
							</form>
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