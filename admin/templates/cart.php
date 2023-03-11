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

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
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
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products_sample/product_img_1.jpg" alt=""></td>
									<td class="product-name">Cheese Burger</td>
									<td class="product-price">1.7$</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<!-- <tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products_sample/product_img_2.jpg" alt=""></td>
									<td class="product-name">Cheese Yoghurt Cake</td>
									<td class="product-price">1.2$</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products_sample/blue_soda.jpg" alt=""></td>
									<td class="product-name">Blue-Ocean Soda</td>
									<td class="product-price">1.2$</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr> -->
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$500</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$45</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$545</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="shop.html" class="boxed-btn">Continue Shopping</a>
							<a href="checkout.html" class="boxed-btn black">Proceed</a>
						</div>
					</div>

					<!-- <div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

<?php
	//footer.php
	include("footer.php");
?>