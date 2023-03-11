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
						<h1>Hot Cappuccino</h1>
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
							<div class="single-artcile-bg"></div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 24 September, 2022</span>
							</p>
							<h2>The Perfect Cappuccino</h2>
							<p>A light, foamy cappuccino is a favorite drink for many coffee lovers. 
								Once you acquire two basic barista skills (pulling shots and foaming milk), 
								you can learn how to make a cappuccino yourself.</p>
							<p>A cappuccino is an Italian coffee drink that is traditionally prepared with equal parts double espresso, 
								steamed milk, and steamed milk foam on top. Cream may be used instead of milk.</p>
							<p>A cappuccino is usually made using an espresso machine. 
								The double espresso is poured into the bottom of the cup, followed by a similar amount of hot milk,
								which is prepared by heating and texturing the milk using the espresso machine's steam wand.
								The top third of the drink consists of milk foam, which can be decorated with art made with the same milk, 
								or simply sprinkled with cinnamon or cocoa powder.</p>
								<p>
									Ideally, a cappuccino is comprised of equal parts espresso, steamed milk, and foam. 
									A latte is comprised of espresso and steamed milk, with a thin cap of foam at the top.
								</p>
						</div>
						<br> <br>
						<div>
							<a class="back-to-menu btn btn-primary" href="news.php" >Back</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="sidebar-section">
						<div class="recent-posts">
							<h4>Recent Posts</h4>
							<ul>
								<li><a href="cappuccino.php">A light, foamy cappuccino is a favorite drink for many coffee lovers.</a></li>
								<li><a href="chocolate_cake.php"></a>This super moist dark chocolate peanut butter cake marries the flavors of rich dark chocolate</li>
								<li><a href="french_fries.php">Good thoughts bear good fresh juicy fruit.There's nothing more deflating than going to all the effort of making your own fries</a></li>
								<li><a href="chips_cookie.php">This is the best chocolate chip cookies recipe ever!</a></li>
								<li><a href="strawberry_cake.php">This delightfully decadent yet deceptively easy-to-make strawberry cream cake tastes like a slice of summer!</a></li>
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