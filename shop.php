<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}

	//header.php
	include("header.php");

	if(isset($_POST['add_to_cart'])){
		$username = $_SESSION['username'];
		$cpro_name = $_POST['product_name'];
		$cpro_price = $_POST['product_price'];
		$cpro_img = $_POST['product_img'];
		$cpro_qty = 1;

		
			$insert =mysqli_query($con, "INSERT INTO cart_table(username, cpro_name, cpro_price, cpro_qty, cpro_img ) VALUES('$username','$cpro_name','$cpro_price','$cpro_qty','$cpro_img');");
			if($insert){
				$err =' <div class="alert alert-warning alert-dismissible fade show" role="alert">
							<strong>'.$cpro_name.'</strong> is added to the cart.
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>';
			}
		// }
	}


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
				<div class="col-12">
					<?php echo $err; ?>
				</div>
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
							<form method="POST">
								<div class="single-product-item">
									<div class="product-image">
										<a href="single-product.php?product_id='.$arr['product_id'].'&'.'product_category='.$arr['product_category'].'"><img src="assets/img/products_sample/'.$arr['product_img'].'" alt=""></a>
									</div>
									<h3>'.$arr['product_name'].'</h3>
									<p class="product-price"><span>Per Piece</span> '.$arr['product_price'].' Kyats </p>
									
									<button type="submit" class="cart-btn btn btn-danger" name="add_to_cart">
									<i class="fas fa-shopping-cart"></i> Add to Cart
									</button>

									<input type="hidden" name="product_name" value="'.$arr['product_name'].'">
									<input type="hidden" name="product_price" value="'.$arr['product_price'].'">
									<input type="hidden" name="product_img" value="'.$arr['product_img'].'">
								</div>
							
							</form>
						</div>';
						
					}
				?>									
			</div>
		</div>
	</div>
	<!-- end products -->
<?php
	//footer.php
	include("footer.php");
?>