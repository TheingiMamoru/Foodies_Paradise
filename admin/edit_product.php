
<?php
	error_reporting(1);
	include('connection.php');
	session_start();
	if(!isset($_SESSION['a_username'])){
		header('location: index.php');
	}

	//header.php
	include("header.php");

	if(isset($_POST['update'])){
		$pro_id = $_GET['edit'];
		$new_name = $_POST['product_name'];
		$new_category = $_POST['product_category'];
		$new_price = $_POST['product_price'];
		$new_img = $_FILES['product_img']['name'];
		$new_img_tmp_name = $_FILES['product_img']['tmp_name'];
		$img_folder = './assets/img/products_sample/'.$new_img;

		$sel = mysqli_query($con, "SELECT product_name FROM product");
		$arr = mysqli_fetch_array($sel);

		if($_POST['product_name'] == $arr['product_name']){
			$err = "product name already exists.";
		}
		else{
			$edit = mysqli_query($con, "UPDATE product SET product_name='$new_name', product_category='$new_category', product_price='$new_price', product_img='$new_img' WHERE product_id='$pro_id'");
			if($edit){
				move_uploaded_file($new_img_tmp_name, $img_folder );
			}
			else{
				$err = "Couldn't update the product!";
			}
		}
	}
?>

	<!-- add form -->
	<?php
		if(isset($_GET['edit'])){
			$pro_id = $_GET['edit'];
			$query = mysqli_query($con, "SELECT * FROM product WHERE product_id=$pro_id");
			$arr_query = mysqli_fetch_array($query);
			 
		}
	?>
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
					<div class="form-title" align="center">
						<h2>EDIT PRODUCTS</h2>
					</div>
					<div class="col-12 my-3 text-center">
						<p style="color: red; "><?php echo $err ?></p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );" align="center" enctype="multipart/form-data">
							<p>
								<input type="text" placeholder="<?php echo $arr_query['product_name']; ?>" name="product_name" id="name">
							</p>
							<p>
								<input type="text" placeholder="<?php echo $arr_query['product_category']; ?>" name="product_category" id="category">
							</p>
                            <p>
								<input type="text" placeholder="<?php echo $arr_query['product_price']; ?>" name="product_price" id="price">
							</p>
                            <p>
                                <input type="file" name="product_img">
							</p>
							<button type="submit" value="update"  name="update" class="btn btn-danger px-5" >Update</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

<?php
	//footer.php
	include("footer.php");
?>