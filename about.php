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

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Why <span class="orange-text">Fo0die's Paradise</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-shipping-fast"></i>
									</div>
									<div class="content">
										<h3>Home Delivery</h3>
										<p>"Bringing good food into your everyday. That's our mission.
											And it means this is delicious food you can enjoy everyday: 
											from vibrant salads for healthy office lunches, Whatever you crave, 
											we can help."</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Great Food Comes First</h3>
										<p> We don't want to be an ordinary food shop.
											A space where you can relax and enjoy yourself. You can eat it with peace of mind, it is healthy, 
											and the ingredients convey the feelings of the producer.
										</p>
										
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-briefcase"></i>
									</div>
									<div class="content">
										<h3>Customer Support</h3>
										<p>Doing our best to give our customers the best.
											And we're welcome for your honest reviews warmly.
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-sync-alt"></i>
									</div>
									<div class="content">
										<h3>Tax Refund</h3>
										<p>Spend your tax refund. Because really, you earned it.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- team section -->
	<div class="mt-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Our <span class="orange-text">Creations & Descriptions</span></h3>
						<p>
							For this recipe I took my favorite homemade cheese pizza crust recipe and halved it, 
							to make one batch of breadsticks and cheese ball. You could make the full recipe for two batches of breadsticks, 
							or use half the dough to make one pizza, and the other half to make cheesy breadsticks. <br>
							This breadstick recipe is the same as my pizza dough recipe.  
							You can use this recipe to make 1 pizza crust or double it to make pizza and breadsticks!
						</p>
						<p>
							We pride ourselves with delivering the sweetest treats and cakes to you! 
							All of our cakes and treats are made fresh from scratch with every order.
						</p>
						<p>
							Nothing is ever frozen and we use all natural ingredients.  
							Great care is taken with each and every order, and decorated to impress.
							We strive to set new trends and are constantly inspired by our customer's creativity!  
							Combining our good ol' fashioned scratch baking with fresh ideas push us into creative unchartered cake decorating territory.
							We promise to leave you satisfied and full of happiness with every bite!
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-1"></div>
						<h4>Cheesey <span>Breadstick</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-item">
						<div class="team-bg team-bg-2"></div>
						<h4>Homemade <span>Cheese</span></h4>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-team-item">
						<div class="team-bg team-bg-3"></div>
						<h4>Brazillian<span>Cheese Ball</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end team section -->

<?php
	//footer.php
	include("footer.php");
?>