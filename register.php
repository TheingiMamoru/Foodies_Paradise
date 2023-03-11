<?php
	ob_start();
	error_reporting(1);
	include("connection.php");

?>


<?php
	//header
	include('header.php');
?>

	<?php
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		// $address = $_POST['address'];

		if(isset($_POST['register'])){
			$query = mysqli_query($con, "SELECT * FROM `customer` WHERE username='$username'");
			$arr = mysqli_fetch_array($query);
			if($arr['username']!=$username){
				if(mysqli_query($con, "INSERT INTO customer(`username`, `email`, `password`, `phone`) VALUES('$username','$email','$password','$phone');")){
					echo "<script>location.href='index.php'</script>";
				}
			}
			else {
				$er = "user already exists !";
			}
		}
	?>
	<!-- register form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<?php echo "$er"; ?>
							</p>
							<p>
								<label for="name">Username</label> <br>
								<input type="text" placeholder="Name" name="username" id="name">
							</p>
						
							<p>
								<label for="email">Email</label> <br>
								<input type="email" placeholder="Email" name="email" id="email">
							</p>
							
							<p>
								<label for="password">Password</label> <br>
								<input type="password" placeholder="Password" name="password" id="password">
							</p>
							
							<p>
								<label for="phone">Phone No: </label> <br>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
							</p>
							
							<input type="submit" value="Register" name="register">
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-title">
						<h2>Register Here!</h2>
						<p>
							To proceed the shopping, <br> please  fill the beside form and register now!
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end register form -->

<?php
	//footer
	include('footer.php');
?>