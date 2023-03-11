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
	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Tasty & Healthy</p>
							<h1>Delicious Cakes & Snacks</h1>
							<div class="hero-btns">
								<a href="shop.php" class="boxed-btn">Best Collection</a>
								<a href="contact.php" class="bordered-btn">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->


	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>Within Yangon</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->


	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>99%</strong> <br> fresh fruits
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/sales.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Taste</span> of the month</h3>
                    <h4>Juicy Fresh Bottles</h4>
                    <div class="text">
						<p>
							Increase your energy level while you detox your body with the super abundance of the freshest fruits and 
							vegetable juicing. Best taste, 100% natural with amazing benefits that fresh organic nutrients will bring to your body, 
							mind and spirit.
						</p>
						<p>
							Detoxification is a word that can be found in the community of nutritionists.
							They embrace this natural "medical treatment" because you can naturally remove toxins accumulated in our body, 
							without affecting your energy level.
						</p>
					</div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="#"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2021</p>
						<h2>We opened <span class="orange-text">Fo0die's Paradise</span></h2>
						<p>
							Welcome To Foodies' Paradise Shop!!
							The Cake Shop crafts all of our baked treats from scratch with fresh natural ingredients.
							
						</p>
						<p>
							For the most discerning sweet tooth, we offer Custom Cakes, Celebration Cakes, Cupcakes, Cake Pops, <br>
							French Fries, Decorated Cookies, Fresh juices and Related drinks for your choice!
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	<?php
		include("product_home.php");
	?>
	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Menu</span> Details</h3>
						<p>
						All of our cakes and treats are made fresh from scratch with every order. 
						Nothing is ever frozen and we use all natural ingredients.  
						Great care is taken with each and every order, and decorated to impress. 
						We strive to set new trends and are constantly inspired by our customer's creativity!  
						</p>
					</div>
				</div>
			</div>

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
								only to find they start losing crispiness before they even hit the table.
								A french fry should be: salty, crisp, light and not greasy.
							</p>
							<a href="french_fries.php" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.php" class="boxed-btn">More Details</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

<?php
	//footer.php
	include("footer.php");
?>
