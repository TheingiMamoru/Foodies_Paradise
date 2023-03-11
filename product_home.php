<?php
	if(isset($_POST['add_to_cart'])){
		$username = $_SESSION['username'];
		$cpro_name = $_POST['cpro_name'];
		$cpro_price = $_POST['cpro_price'];
		$cpro_img = $_POST['cpro_img'];
		$cpro_qty = 1;

			$insert =mysqli_query($con, "INSERT INTO cart_table(username, cpro_name, cpro_price, cpro_qty, cpro_img ) VALUES('$username','$cpro_name','$cpro_price','$cpro_qty','$cpro_img');");
			if($insert){
				header('location: cart.php');
			}
		
	}
?>	

	<!--product php-->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Today's</span> Popular Menu</h3>
						
						<p>
							Welcome To Foodies' Paradise!!
							For the most discerning sweet tooth, we offer Custom Cakes, Celebration Cakes, Cupcakes, 
							Cake Pops, French Macarons, Decorated Cookies, Chocolate Dipped Pretzels and Decorated Rice Krispies Treats!
						</p>
					</div>
				</div>
			</div>

			<div class="row">
				<?php
					$sel=mysqli_query($con, "SELECT * FROM product order by rand()");
					$n=0;
        			while($arr=mysqli_fetch_array($sel)){
						echo '
						<div class="col-lg-4 col-md-6 text-center">
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

								<input type="hidden" name="cpro_name" value="'.$arr['product_name'].'">
								<input type="hidden" name="cpro_price" value="'.$arr['product_price'].'">
								<input type="hidden" name="cpro_img" value="'.$arr['product_img'].'">
							</div>
							
							</form>
						</div>';
						$n++;
						if($n==3){
							break;
						};
					}
				
				?>
			</div>
		</div>
	</div>
	<!-- end product section -->