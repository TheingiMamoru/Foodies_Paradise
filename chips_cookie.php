<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>


<?php
	//header
	include('header.php');
?>
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Read the Details</p>
						<h1>NEW STYLE CHOCOLATE CHIP COOKIE</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
	
	<!-- single article section -->
	<div class="mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="single-article-section">
						<div class="single-article-text">
							<div class="single-artcile-bg-4" ></div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<h2>THE BEST CHOCOLATE CHIP COOKIE RECIPE EVER</h2>
							<p>
								This is the best chocolate chip cookies recipe ever! No funny ingredients, 
								no chilling time, etc. Just a simple, straightforward, amazingly delicious, doughy yet still fully cooked, 
								chocolate chip cookie that turns out perfectly every single time! 
							</p>
							<p>
								Everyone needs a classic chocolate chip cookie recipe in their repertoire, 
								and this is mine. It is seriously the Best Chocolate Chip Cookie Recipe Ever! 
								I have been making these for many, many years and everyone who tries them agrees they're out-of-this-world delicious!
							</p>
							<p>
								Everyone needs a classic chocolate chip cookie recipe in their repertoire, and this is mine. 
								It is seriously the Best Chocolate Chip Cookie Recipe Ever! I have been making these for many, 
								many years and everyone who tries them agrees they’re out-of-this-world delicious!
							</p>
							<p>
								These are everything a chocolate chip cookie should be. 
								Crispy and chewy. Doughy yet fully baked. Perfectly buttery and sweet.
							</p>
						</div>
						<br> <br>
						<div>
							<a class="back-to-menu btn btn-primary" href="news.php">Back</a>
						</div>
						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
								<li><a href="cappuccino.php">A light, foamy cappuccino is a favorite drink for many coffee lovers.</a></li>
								<li><a href="chocolate_cake.php">This super moist dark chocolate peanut butter cake marries the flavors of rich dark chocolate</a></li>
								<li><a href="french_fries.php">There's nothing more deflating than going to all the effort of making your own fries</a></li>
								<li><a href="chips_cookie.php">This is the best chocolate chip cookies recipe ever!</a></li>
								<li><a href="strawberry_cake.php">This delightfully decadent yet deceptively easy-to-make strawberry cream cake tastes like a slice of summer!Why the berries always look delecious</a></li>
							</ul>
						</div>
						
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="cappuccino.php">Cappuccino</a></li>
								<li><a href="chocolate_cake.php">Chocolate Peanut Cake</a></li>
								<li><a href="french_fries.php">French Fries</a></li>
								<li><a href="chips_cookie.php">Chocolate Chips Cookie</a></li>
								<li><a href="strawberry_cake.php">Strawberry Cremy Cake</a></li>
								<li><a href="fruit_soda.php">Fresh Fruity Soda</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single article section -->

<?php
	//footer
	include('footer.php');
?>