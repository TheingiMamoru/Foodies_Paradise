<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}


?>

<?php
	
	//header.php
	include("header.php");

	if(isset($_POST['order_btn'])){
		$username = $_SESSION['username'];
		$name = $_POST['username'];
		$phone_no = $_POST['phone'];
		$address = $_POST['address'];
		$street = $_POST['street'];
		$township = $_POST['township'];
		$city = $_POST['city'];
		$method = $_POST['method'];

		$cart_query = mysqli_query($con, "SELECT * FROM cart_table WHERE username='$username'");
		$price_total = 0;

		if(mysqli_num_rows($cart_query) > 0){
			while($product_item = mysqli_fetch_assoc($cart_query)){
				$product_name[] = $product_item['cpro_name'].'('.$product_item['cpro_qty'].')';
				$product_price = $product_item['cpro_price'] * $product_item['cpro_qty'];
				$price_total += $product_price;
			};
		};

		$total_products = implode(', ', $product_name);
		$insert_order = mysqli_query($con, "INSERT INTO `order`(`username`, `phone`, `address`, `street`, `township`, `city`, `method`, `total_products`, `total_price`) VALUES('$username', '$phone_no', '$address','$street', '$township', '$city','$method','$total_products','$price_total');");
		if($insert_order){
			header('location:order_confirm.php');
		}
		
	}
?>
	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  	<div class="card single-accordion">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Billing Address
										</button>
									</h5>
								</div>
							

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<div class="billing-address-form">
										<form method="POST">
											<?php 
												$user = $_SESSION['username'];
												$sel_user_data = mysqli_query($con, "SELECT * FROM customer WHERE username='$user'");
												$arr_user_data = mysqli_fetch_array($sel_user_data);
											 ?>
											<p>
												<input type="text" name="username" value="<?php echo $arr_user_data['username']; ?>" readonly>
											</p>
											<p><input type="text" name="address" placeholder="Address" required></p>
											<p><input type="text" name="street" placeholder="Street" required></p>
											<p><input type="text" name="township" placeholder="Township" required></p>
											<p><input type="text" name="city" placeholder="City" required></p>
											<p>
												<input type="number" name="phone" value="<?php echo $arr_user_data['phone']; ?>" readonly>
											</p>
											<input type="hidden" name="method" value="Cash on Delivery">
										<!-- </form> -->
									</div>
								</div>
								</div>
							</div>
						  <div class="card single-accordion">
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Billing Method
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Cash on Delivery</p>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr style="border-bottom: 1px solid #eee;">
									<th colspan="3">Your Order Details</th>
								</tr>
								<tr>
									<th>Product</th>
									<th>Qty</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<?php 
									$username = $_SESSION['username'];
									$sel_cart = mysqli_query($con, "SELECT * FROM cart_table WHERE username = '$username'");
									$sub_total = 0;
									$total = 0;
									if(mysqli_num_rows($sel_cart) > 0) {
										while($fetch_cart = mysqli_fetch_assoc($sel_cart)) {
											$sub_total = $fetch_cart['cpro_price'] * $fetch_cart['cpro_qty'];
											$total += $sub_total;
								?>
									<tr>
										<td> <?php echo $fetch_cart['cpro_name']; ?> </td>
										<td> x <?php echo $fetch_cart['cpro_qty']; ?> </td>
										<td> <?php echo number_format($sub_total); ?> Kyats</td>
									</tr>
								<?php
										}
									}else{
										echo '<tr><td colspan="3">Your cart is empty.</td></tr>';
									}

								?>
							</tbody>

							<tbody class="checkout-details">
								<tr>
									<td>Total</td>
									<td colspan="2" align="right"><?php echo number_format($total); ?> Kyats</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center">
							<button name="order_btn" class="boxed-btn btn btn-danger m-3 px-3">Place Order</button>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end check out section -->

<?php
	//footer.php
	include("footer.php");
?>