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
						<h1>Fresh Fruity Soda</h1>
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
							<div class="single-artcile-bg-6" ></div>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 25 September, 2022</span>
							</p>
							<h2>Real Fresh Fruit Soda</h2>
							<p>
								It's not much of a secret just how not good for you drinking soda is.
								How to make homemade fruit soda using just four ingredients, <br> 
								including real fruit! Perfect for parties and special occasions.
							</p>
							<p>
								One fizzy exception is seltzer water. I like that it's unsweetened but still seems sort of special. 
								My kids like it too, especially with a splash of fruit juice.
								It occurred to me that I could make my own party-worthy soda using actual, real fruit. 
								Imagine that: A berry-flavored soda made with actual berries—and no funny additives or artificial ingredients.
							</p>
							<p>
								You can use any variety of fruit your kids like best. For a party, 
								I like the idea of mixing up a few different syrups and offering kids a choice.
								A classic simple syrup is made with granulated sugar and water, but you can swap in honey if you prefer.
							</p>
							<p>
								Fruit soda still a sweet, special occasion drink, with about 7 teaspoons of added sugar per glass.
								But that still beats the ten you kids would get in a can of soda.
							</p>
						</div>
						<br> <br>
						<div>
							<a class="back-to-menu btn btn-primary" href="news.php">Back</a>
						</div>
						<!--comment Section-->
						<!-- <div class="comments-list-wrap">
							<h3 class="comment-count-title">3 Comments</h3>
							<div class="comment-list">
								<div class="single-comment-body">
									<div class="comment-user-avater">
										<img src="assets/img/avaters/avatar1.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>Jenny Joe <span class="comment-date">Aprl 26, 2020</span> <a href="#">reply</a></h4>
										<p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
									</div>
									<div class="single-comment-body child">
										<div class="comment-user-avater">
											<img src="assets/img/avaters/avatar3.png" alt="">
										</div>
										<div class="comment-text-body">
											<h4>Simon Soe <span class="comment-date">Aprl 27, 2020</span> <a href="#">reply</a></h4>
											<p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
										</div>
									</div>
								</div>
								<div class="single-comment-body">
									<div class="comment-user-avater">
										<img src="assets/img/avaters/avatar2.png" alt="">
									</div>
									<div class="comment-text-body">
										<h4>Addy Aoe <span class="comment-date">May 12, 2020</span> <a href="#">reply</a></h4>
										<p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="comment-template">
							<h4>Leave a comment</h4>
							<p>If you have a comment dont feel hesitate to send us your opinion.</p>
							<form action="index.html">
								<p>
									<input type="text" placeholder="Your Name">
									<input type="email" placeholder="Your Email">
								</p>
								<p><textarea name="comment" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea></p>
								<p><input type="submit" value="Submit"></p>
							</form>
						</div> -->
						<!--end comment section-->
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
						<!--Archieve Post-->
						<!-- <div class="archive-posts">
							<h4>Archive Posts</h4>
							<ul>
								<li><a href="single-news.html">JAN 2019 (5)</a></li>
								<li><a href="single-news.html">FEB 2019 (3)</a></li>
								<li><a href="single-news.html">MAY 2019 (4)</a></li>
								<li><a href="single-news.html">SEP 2019 (4)</a></li>
								<li><a href="single-news.html">DEC 2019 (3)</a></li>
							</ul>
						</div> -->
						<!--end of Archieve Post-->
						<div class="tag-section">
							<h4>Tags</h4>
							<ul>
								<li><a href="cappuccino.php">Cappuccino</a></li>
								<li><a href="chocolate_cake.php">Chocolate Peanut Cake</a></li>
								<li><a href="french_fries.php">French Fries</a></li>
								<li><a href="chips_cookie.php">Chocolate Chips Cookie</a></li>
								<li><a href="strawberry_cake.php">Strawberry Creamy Cake</a></li>
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