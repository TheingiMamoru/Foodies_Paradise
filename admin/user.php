
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
		$del_query = mysqli_query($con, "DELETE FROM customer WHERE user_id=$del_id");
	}
?>

	<!-- User -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table-wrap">
                        <h4 align="center">User Table</h4>
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="customer-remove"></th>
                                    <th class="customer-id">Id</th>
									<th class="customer-name">Username</th>
									<th class="customer-email">Email</th>
									<th class="customer-phone">Phone</th>
									<th class="customer-password">Address</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sel = mysqli_query($con, "SELECT * FROM customer");
									while($arr = mysqli_fetch_array($sel)){
										echo '
											<tr class="table-body-row">
												<td class="customer-remove">
													<a href="user.php?del='.$arr['user_id'].'" class="btn btn-sm btn-danger text-white"><i class="far fa-window-close"></i></a>
												</td>
												<td class="customer-id">'.$arr['user_id'].'</td>
												<td class="customer-name">'.$arr['username'].'</td>
												<td class="customer-email">'.$arr['email'].'</td>
												<td class="customer-phone">'.$arr['phone'].'</td>
												<td class="customer-address">'.$arr['address'].'</td>
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
	<!-- end user table -->

<?php
	//footer.php
	include("footer.php");
?>