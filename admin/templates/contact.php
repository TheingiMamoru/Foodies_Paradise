<?php
	error_reporting(1);
	include("connection.php");
	session_start();

	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
?>


<?php
	ob_start();
	//header.php
	include("header.php");
?>

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>Do you wanna know more about us?</h2>
						<p>
							&nbsp; &nbsp;	We're dedicated to improving the way we prepare our quality food and the ingredients that go into it.
							We're passionate about our food. That's why we're committed to always evolving what matters to you. <br>
							&nbsp; &nbsp;	Our nutrition calculator has the McDonald’s menu nutrition information you’re seeking. Learn more about your favorite meals.
							When it comes to quality options, we’ve got you covered.
						</p>
					</div>
				 	<div id="form_status"></div>
					<div class="contact-form">
						<form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone">
							</p>
							<p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message us"></textarea></p>
							<input type="hidden" name="token" value="FsWga4&@f6aw" />
							<input type="submit" value="Submit">
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Shop Address</h4>
							<p>1547/A <br> Bayinknaung Road, Ocean-Hlaingtharyar, Yangon. <br> Myanmar</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Shop Hours</h4>
							<p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: +95 111 222 3333 <br> Email: support@foodiesparadise.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.3864880153365!2d96.07318631786016!3d16.856765290672776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1956546019c31%3A0xe942eeeb5d74e7c2!2sOcean%20Supercenter%20(Hlaing%20Thar%20Yar%20Branch)!5e0!3m2!1sen!2smm!4v1664100037998!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- end google map section -->


<?php
	//footer.php
	include("footer.php");
?>