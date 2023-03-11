
<?php
	error_reporting(1);
	include('connection.php');
	session_start();
	if(!isset($_SESSION['a_username'])){
		header('location: index.php');
	}

	//header.php
	include("header.php");

	if(isset($_POST['add'])){
		$pro_name = $_POST['product_name'];
		$pro_category = $_POST['product_category'];
		$pro_price = $_POST['product_price'];
		$pro_img = $_FILES['product_img']['name'];
		$pro_img_tmp_name = $_FILES['product_img']['tmp_name'];
		$img_folder = './assets/img/products_sample/'.$pro_img;

		$sel = mysqli_query($con, "SELECT product_name FROM product");
		$arr = mysqli_fetch_array($sel);

		if($_POST['product_name'] == $arr['product_name']){
			$err = "product name already exists.";
		}
		else{
			$insert = mysqli_query($con, "INSERT INTO product(product_name, product_category, product_price, product_img) VALUES('$pro_name','$pro_category','$pro_price','$pro_img')");
			if($insert){
				move_uploaded_file($pro_img_tmp_name, $img_folder );
			}
			else{
				$err = "Couldn't add the product!";
			}
		}
	}
?>

	<!-- add form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mb-5 mb-lg-0">
					<div class="form-title" align="center">
						<h2>ADD MORE PRODUCTS</h2>
					</div>
					<div class="col-12 my-3 text-center">
						<p style="color: red; "><?php echo $err ?></p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form method="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );" align="center" enctype="multipart/form-data">
							<p>
								<input type="text" placeholder="Enter Product name" name="product_name" id="name">
							</p>
							<p>
								<input type="text" placeholder="Enter Product category" name="product_category" id="category">
							</p>
                            <p>
								<input type="text" placeholder="Enter Product price" name="product_price" id="price">
							</p>
                            <p>
                                <input type="file" name="product_img">
							</p>
							<!-- <input type="hidden" name="token" value="FsWga4&@f6aw" /> -->
							<button type="submit" value="ADD"  name="add" class="btn btn-danger px-5" >ADD</button>
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