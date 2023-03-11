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
?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Our Latest News</p>
						<h1>We Serve The Best, <br> You Deserve it!</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="cappuccino.php"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="cappuccino.php">Cappuccino</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">
								A cappuccino is an Italian coffee drink that is traditionally prepared with equal parts double espresso, 
								steamed milk, and steamed milk foam on top. Cream may be used instead of milk. 
								It is typically smaller in volume than a latte, and has a thicker layer of microfoam. 
							</p>
							<a href="cappuccino.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="chocolate_cake.php"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="chocolate_cake.php">Chocolate Peanut Butter Cake</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<p class="excerpt">
								This super moist dark chocolate peanut butter cake marries the flavors of rich dark chocolate 
								and sweet creamy peanut butter—a match made in heaven if ever there was one.
								Fill and coat the cake with peanut butter frosting,
							</p>
							<a href="chocolate_cake.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="french_fries.php"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="french_fries.php">Perfect Crispy French fries</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<p class="excerpt">
								Here it is, The perfect french fries recipe!
								There's nothing more deflating than going to all the effort of making your own fries from scratch, 
								only to find they start losing crispiness before they even hit the table. <br>
								A french fry should be: salty, crisp, light, and not greasy.
							</p>
							<a href="french_fries.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="chips_cookie.php"><div class="latest-news-bg news-bg-4"></div></a>
						<div class="news-text-box">
							<h3><a href="chips_cookie.php">Chocolate cookie with chips</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<p class="excerpt">
								This is the best chocolate chip cookies recipe ever! No funny ingredients, 
								no chilling time, etc. Just a simple, straightforward, amazingly delicious, doughy yet still fully cooked, 
								chocolate chip cookie that turns out perfectly every single time! 
							</p>
							<a href="chips_cookie.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="strawberry_cake.php"><div class="latest-news-bg news-bg-5"></div></a>
						<div class="news-text-box">
							<h3><a href="strawberry_cake.php">Strawberry Cream Cake</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<p class="excerpt">
								This delightfully decadent yet deceptively easy-to-make strawberry cream cake tastes like a slice of summer!
								A basic cake mix is upgraded with fresh berries and a a few extras, 
								slathered in whipped cream and topped with heaps of fresh strawberries!
							</p>
							<a href="strawberry_cake.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="fruit_soda.php"><div class="latest-news-bg news-bg-6"></div></a>
						<div class="news-text-box">
							<h3><a href="fruit_soda.php">Love for the Fruity Soda</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<p class="excerpt">
								It's not much of a secret just how not good for you drinking soda is.
								How to make homemade fruit soda using just four ingredients, <br> 
								including real fruit! Perfect for parties and special occasions.
								Enjoy your love shot!
							</p>
							<a href="fruit_soda.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--add new more-->
			

			<!-- <div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Prev</a></li>
									<li><a href="#">1</a></li>
									<li><a class="active" href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Next</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<!-- <div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end logo carousel -->

<?php
	//footer.php
	include("footer.php");
?>