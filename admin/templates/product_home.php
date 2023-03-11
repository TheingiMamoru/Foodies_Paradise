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
							<div class="single-product-item">
								<div class="product-image">
									<a href="single-product.php?product_id='.$arr['product_id'].'&'.'product_category='.$arr['product_category'].'"><img src="assets/img/products_sample/'.$arr['product_img'].'" alt=""></a>
								</div>
								<h3>'.$arr['product_name'].'</h3>
								<p class="product-price"><span>Per Piece</span> '.$arr['product_price'].' Kyats </p>
								<a href="cart.php?product_id='.$arr['product_id'].'" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							</div>
						</div>';
						$n++;
						if($n==3){
							break;
						};
					}
				
				?>
				<!-- <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_img_2.jpg" alt=""></a>
						</div>
						<h3>Cheesey Yoghurt Cake</h3>
						<p class="product-price"><span>Per Piece</span> 1.2$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products_sample/product_img_3.jpg" alt=""></a>
						</div>
						<h3>Berry Yoghurt Cake</h3>
						<p class="product-price"><span>Per Piece</span> 1.5$ </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!-- end product section -->