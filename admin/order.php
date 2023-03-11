<?php
	error_reporting(1);
	include('connection.php');
	session_start();
	if(!isset($_SESSION['a_username'])){
		header('location: index.php');
	}

	//header.php
	include("header.php");

	if(isset($_GET['del'])){
		$del_id = $_GET['del'];
		$del_query = mysqli_query($con, "DELETE FROM `order` WHERE order_id=$del_id");
	}
?>

	<!-- Order -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table-wrap">
                        <h4 align="center">Users' Order Table</h4>
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
                                    <th class="order-id">Id</th>
									<th class="order-username">Username</th>
									<th class="order-phone">Phone</th>
									<th class="order-address">Address</th>
									<th class="order-street">Street</th>
									<th class="order-township">Township</th>
									<th class="order-city">City</th>
									<th class="order-method">Method</th>
									<th class="total-products">Total Products</th>
									<th class="total-price">Total Price</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$o_sel = mysqli_query($con, "SELECT * FROM `order`");
									while($o_arr = mysqli_fetch_array($o_sel)){
										echo '
											<tr class="table-body-row">
												
												<td class="order-id">'.$o_arr['order_id'].'</td>
												<td class="order-username">'.$o_arr['username'].'</td>
												<td class="order-phone">'.$o_arr['phone'].'</td>
												<td class="order-address">'.$o_arr['address'].'</td>
												<td class="order-street">'.$o_arr['street'].'</td>
												<td class="order-township">'.$o_arr['township'].'</td>
												<td class="order-city">'.$o_arr['city'].'</td>
												<td class="order-method">'.$o_arr['method'].'</td>
												<td class="total-products">'.$o_arr['total_products'].'</td>
												<td class="total_price">'.number_format($o_arr['total_price']).'</td>
												<td>
													<a href="order.php?del='.$o_arr['order_id'].'" class="btn btn-danger btn-sm my-1" name="del"><i class="far fa-window-close"></i></a>
												</td>
											</tr>
										 ';
										
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end order table -->


<?php
	//footer.php
	include("footer.php");
?>