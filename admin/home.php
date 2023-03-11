<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['a_username'])){
		header('location: index.php');
	}
?>

<?php
	//header.php
	include("header.php");
?>


	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<!-- <p class="subtitle">Welcome to</p> -->
							<h1>Welcome To </h1><br> 
							<h2>Admin Page</h2>
							<!-- <div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Best Collection</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

<?php
	//footer.php
	include("footer.php");
?>
