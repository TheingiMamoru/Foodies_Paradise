<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>


<?php
	ob_start();
	//header.php
	include("header.php");
?>
	
	<!-- breadcrumb-section -->
	<!-- <div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<?php
					if(isset($_GET['product_id'])){
						$product_id = $_GET['product_id'];
						$sel = mysqli_query($con, "SELECT * FROM product WHERE product_id='$product_id'");
						while($arr = mysqli_fetch_array($sel)){
							echo '
							<div class="col-md-5">
								<div class="single-product-img">
									<img src="assets/img/products_sample/'.$arr['product_img'].'" alt="">
								</div>
							</div>
							<div class="col-md-7">
								<div class="single-product-content">
									<h3>'.$arr['product_name'].'</h3>
									<p class="single-product-pricing"> $ '.$arr['product_price'].'</p>
									<div class="single-product-form">
										<p><strong>Categories: </strong>'.$arr['product_category'].'</p>
										<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
									</div>
									<h4>Share:</h4>
									<ul class="product-share">
										<li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
										<li><a href="https://www.google.com/"><i class="fab fa-google-plus-g"></i></a></li>
										<li><a href="https://mm.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
										<li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							';
						}
					}
				?>
				
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<?php
					if(isset($_GET['product_category'])){
						$product_category = $_GET['product_category'];
						$rel = mysqli_query($con, "SELECT * FROM product WHERE product_category='$product_category'");
						$n = 0;
						while($rel_arr = mysqli_fetch_array($rel)){
							echo '
							<div class="col-lg-4 col-md-6 text-center">
								<div class="single-product-item">
									<div class="product-image">
										<a href="single-product.php"><img src="assets/img/products_sample/'.$rel_arr['product_img'].'" alt=""></a>
									</div>
									<h3>'.$rel_arr['product_name'].'</h3>
									<p class="product-price"> $'.$rel_arr['product_price'].' </p>
									<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
								</div>
							</div>
							';
							$n++;
							if($n==3){
								break;
							}
						}
					}
				?>
				
				<!-- <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- end more products -->

	<!-- logo carousel -->
	<!-- <div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end logo carousel -->

<?php
	//footer.php
	include("footer.php");
?>