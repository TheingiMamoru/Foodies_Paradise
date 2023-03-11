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
						<h1>Chocolate Peanut Butter Cake</h1>
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
							<div class="single-artcile-bg-2" ></div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<h2>Dark Chocolate Peanut Butter Cake</h2>
							<p>This super moist dark chocolate peanut butter cake marries the flavors of rich dark chocolate 
								and sweet creamy peanut butter—a match made in heaven if ever there was one. 
								Fill and coat the cake with peanut butter frosting, then cover the whole dessert with semi-sweet chocolate ganache, 
								pipe more peanut butter frosting on top… and get ready to swoon, because this is love at first bite.</p>
							<p>Meet our newest most eligible bachelor: the dark chocolate peanut butter cake. 
								This cake is rich. Like, ultra-rich. I think the term “filthy rich” might even apply here.</p>
							<p>Cake crumb is fudge-like and moist, yet a little light and spongey.
								Peanut butter frosting packs BIG flavor.
								It’s sweet, but not overly so; the lightly sweetened peanut butter frosting 
								and dark chocolate ganache is a nice break from cloyingly sweet buttercream.
							</p>
								<p>
									Very rich! If you’re going to indulge, put this layer cake on the menu.
								</p>
						</div>
						<br> <br>
						<div>
							<a class="back-to-menu btn btn-primary " href="news.php">Back</a>
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