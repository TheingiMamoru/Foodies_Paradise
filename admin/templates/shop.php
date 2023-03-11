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
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Tasty & Healthy</p>
						<h1>Shop Here!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".cakes">Cakes</li>
                            <li data-filter=".snacks">Snacks</li>
                            <li data-filter=".drinks">Drinks</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
				<?php
					$sel = mysqli_query($con, "SELECT * FROM product");
					while($arr = mysqli_fetch_array($sel)){
						echo '
						<div class="col-lg-4 col-md-6 text-center '.$arr['product_category'].'">
							<div class="single-product-item">
								<div class="product-image">
									<a href="single-product.php"><img src="assets/img/products_sample/'.$arr['product_img'].'" alt=""></a>
								</div>
								<h3>'.$arr['product_name'].'</h3>
								<p class="product-price"><span>Per Piece</span> '.$arr['product_price'].' Kyats </p>
								<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							</div>
						</div> ';
						
					}
				?>
				
				<!-- <div class="col-lg-4 col-md-6 text-center cakes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_img_3.jpg" alt=""></a>
						</div>
						<h3>Berry Yoghurt Cake</h3>
						<p class="product-price"><span>Per Piece</span> 1.5$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center cakes">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_image_5.jpg" alt=""></a>
						</div>
						<h3>Butter Cake</h3>
						<p class="product-price"><span>Per Piece</span> 1.2$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center snacks">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_img_1.jpg" alt=""></a>
						</div>
						<h3>Cheese Burger</h3>
						<p class="product-price"><span>Per Piece</span> 1.7$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center snacks">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_image_6.jpg" alt=""></a>
						</div>
						<h3>Shrimp Burger</h3>
						<p class="product-price"><span>Per Piece</span> 1.7$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center snacks">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_img_7.jpg" alt=""></a>
						</div>
						<h3>French Fries</h3>
						<p class="product-price"><span>Per Pack</span> 1.2$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> -->
				<!--add new-->
				<!-- <div class="col-lg-4 col-md-6 text-center drinks">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/lemon_tea.jpg" alt=""></a>
						</div>
						<h3>Iced-Lemon Tea</h3>
						<p class="product-price"><span>Per Mug</span> 1.3$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center drinks">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/passion_soda.jpg" alt=""></a>
						</div>
						<h3>Passion Soda</h3>
						<p class="product-price"><span>Per Mug</span> 1.3$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center drinks">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/blue_soda.jpg" alt=""></a>
						</div>
						<h3>Blue-Ocean Soda</h3>
						<p class="product-price"><span>Per Mug</span> 1.2$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> -->
				<!--end new-->
			</div>
			

			<!-- <div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end products -->

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