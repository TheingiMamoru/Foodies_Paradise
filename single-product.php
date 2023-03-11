<?php
	error_reporting(1);
	ob_start();
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}

	if(isset($_POST['add_to_cart'])){
		$username = $_SESSION['username'];
		$cpro_name = $_POST['cpro_name'];
		$cpro_price = $_POST['cpro_price'];
		$cpro_img = $_POST['cpro_img'];
		$cpro_qty = 1;

			$cart_insert =mysqli_query($con, "INSERT INTO `cart_table`(`username`, `cpro_name`, `cpro_price`, `cpro_qty`, `cpro_img` ) VALUES('$username','$cpro_name','$cpro_price','$cpro_qty','$cpro_img');");
			if($cart_insert){
				header('location: cart.php');
			}
			else{
				$er= "error";
			}
		
	}
?>


<?php
	
	//header.php
	include("header.php");
?>	
	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row col-12">
				<?php
					if(isset($_GET['product_id'])){
						$product_id = $_GET['product_id'];
						$sel = mysqli_query($con, "SELECT * FROM product WHERE product_id='$product_id'");
						while($arr = mysqli_fetch_array($sel)){
							echo '
							<div class="col-8" align="center">
								<form method="POST">
									<div class="col-md-5">
										<div class="single-product-img">
											<img src="assets/img/products_sample/'.$arr['product_img'].'" alt="">
										</div>
									</div>
									<div class="col-md-7">
										<div class="single-product-content">
											<h3>'.$arr['product_name'].'</h3>
											<p class="single-product-pricing">  '.$arr['product_price'].' Kyats</p>
											<div class="single-product-form">
												<p><strong>Categories: </strong>'.$arr['product_category'].'</p>
												
												
												<button type="submit" class="cart-btn btn btn-danger" name="add_to_cart">
												<i class="fas fa-shopping-cart"></i> Add to Cart
												</button>
												<input type="hidden" name="cpro_name" value="'.$arr['product_name'].'">
												<input type="hidden" name="cpro_price" value="'.$arr['product_price'].'">
												<input type="hidden" name="cpro_img" value="'.$arr['product_img'].'">
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
								</form>
							</div>								
							';
						}
					}
				?>
				<!--sidebar-->
				<div class="col-4">
					<div class="sidebar-section">
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="cappuccino.php">Cappuccino</a></li>
								<li><a href="chocolate_cake.php">Chocolate Peanut Cake</a></li>
								<li><a href="french_fries.php">French Fries</a></li>
								<li><a href="chips_cookie.php">Chocolate Chips Cookie</a></li>
								<li><a href="strawberry_cake.php">Strawberry Cremy Cake</a></li>
								<li><a href="fruit_soda.php">Fresh Fruity Soda</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--sidebar-->
				
			</div>
		</div>
	</div>
	<!-- end single product -->

<?php
	//footer.php
	include("footer.php");
?>