
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
		$del_query = mysqli_query($con, "DELETE FROM product WHERE product_id=$del_id");
	}
?>

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table-wrap">
                        <h4 align="center">ALL Products</h4>
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-id">Id</th>
									<th class="product-image">Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-category">Category</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sel = mysqli_query($con, "SELECT * FROM product");
									while($arr = mysqli_fetch_array($sel)){
										echo '
										<tr class="table-body-row '.$arr['product_category'].' ">
											<div class="">
												<td class="product-remove">
													<a href="edit_product.php?edit='.$arr['product_id'].'" class="btn btn-sm btn-info text-white"><i class="fas fa-pen"></i></a>
													<a href="all_product.php?del='.$arr['product_id'].'" class="btn btn-sm btn-danger text-white"><i class="far fa-window-close"></i></a>
												</td>
												<td class="product-id">'.$arr['product_id'].'</td>
												<td class="product-image"><img src="./assets/img/products_sample/'.$arr['product_img'].'" alt=""></td>
												<td class="product-name">'.$arr['product_name'].'</td>
												<td class="product-price">'.$arr['product_price'].' Kyats</td>
												<td class="product-category">'.$arr['product_category'].'</td>
											</div>
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
	<!-- end cart -->

<?php
	//footer.php
	include("footer.php");
?>