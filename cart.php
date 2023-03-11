<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}

	if(isset($_GET['del'])){
		$del_id = $_GET['del'];
		$del_query = mysqli_query($con, "DELETE FROM cart_table WHERE cart_id='$del_id'");
	}

	if(isset($_POST['update_btn'])){
		$update_id = $_POST['update_qty_id'];
		$update_qty = $_POST['update_qty'];

		$update_qty_query = mysqli_query($con, "UPDATE `cart_table` SET cpro_qty=$update_qty WHERE cart_id = $update_id");
		if($update_qty_query){
			header('location:cart.php');
		}
	}
?>


<?php
	ob_start();
	//header.php
	include("header.php");
?>

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$username = $_SESSION['username'];
									$sel= mysqli_query($con, "SELECT * FROM cart_table WHERE username='$username'");
									$total = 0;
									if(mysqli_num_rows($sel) > 0) {
										while($fetch_cart = mysqli_fetch_assoc($sel)){
									?>
										
											<tr class="table-body-row">
												<td class="product-remove">
													<a href="cart.php?del=<?php echo $fetch_cart['cart_id']; ?>" class="btn btn-sm btn-danger text-white"><i class="far fa-window-close"></i></a>
												</td>
												<td class="product-image"><img src="assets/img/products_sample/<?php echo $fetch_cart['cpro_img']; ?>" alt=""></td>
												<td class="product-name"><?php echo $fetch_cart['cpro_name']; ?></td>
												<td class="product-price"><?php echo number_format($fetch_cart['cpro_price']); ?> Kyats</td>
												<td class="product-quantity">
													<form method="POST">
														<input type="hidden" name="update_qty_id" value="<?php echo $fetch_cart['cart_id']; ?>">
														<input type="number" name="update_qty" value="<?php echo $fetch_cart['cpro_qty']; ?>" min="1"> <br>
														<input type="submit" value="update" name="update_btn" class="btn btn-sm text-white mt-2 p-1">
														
													</form>
												</td>
												<td class="product-total"><?php $sub_total=$fetch_cart['cpro_price'] * $fetch_cart['cpro_qty']; echo number_format($sub_total); ?> Kyats</td>
											</tr>
									<?php

											$total += $sub_total;
										};
									}
									?>
								<tr>
									<td colspan="4"></td>
									<td>
										<strong>Total</strong>
									</td>
									<td>
										<?php echo number_format($total); ?> Kyats
									</td>


							
									
								</tr>
								
							</tbody>
						</table>
						<div class="cart-buttons text-right">
							<a href="shop.php" class="boxed-btn">Continue Shopping</a>
							<a href="checkout.php" class="boxed-btn black">Proceed</a>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
	<!-- end cart -->

<?php
	//footer.php
	include("footer.php");
?>