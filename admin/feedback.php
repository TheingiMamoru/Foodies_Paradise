
<?php
	error_reporting(1);
	include('connection.php');
	session_start();
	if(!isset($_SESSION['a_username'])){
		header('location: index.php');
	}

	//header.php
	include("header.php");

?>

	<!-- User -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table-wrap">
                        <h4 align="center">Customer Feedback</h4>
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="customer-remove"></th>
                                    <th class="id">Id</th>
									<th class="customer-name">Username</th>
									<th class="customer-feedback">Feedback_Message</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sel = mysqli_query($con, "SELECT * FROM contact_messages");
									while($arr = mysqli_fetch_array($sel)){
										echo '
											<tr class="table-body-row">
												<td class="customer-remove">
													<a href="user.php?del='.$arr['id'].'" class="btn btn-sm btn-danger text-white"><i class="far fa-window-close"></i></a>
												</td>
												<td class="id">'.$arr['id'].'</td>
												<td class="customer-name">'.$arr['username'].'</td>
												<td class="customer-feedback">'.$arr['message'].'</td>
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