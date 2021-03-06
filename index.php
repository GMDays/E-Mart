<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php ?>
	<head>
		<title>Coming Soon!</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/override.css" />
		</noscript>
		<script type="text/javascript">
			function overlay() {
				var el = document.getElementById("overlay");
				el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
			}

			function loginModal(){
				var el = document.getElementById("loginModal");
				el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
			}
		</script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<!-- Header -->
			<div id="header-wrapper" class="wrapper">
				<div id="header">
					<!-- Logo -->
						
						<div id="logo">
							<ul class="actions">
								<li><a href="#" class="button style1" onclick="loginModal()">Log In</a></li>
							</ul>
							<div class="title">
								<section class="feature-list small">	
									<div class="row">
										<div class="3u">
											<section>
												<a href="#" ><h3 style="" class="icon fa-facebook"></h3></a>
											</section>
										</div>
										<div class="3u">
											<section>
												<a href="#"><h3 class="icon fa-twitter"></h3></a>
											</section>
										</div>
										<div class="3u">
											<section>
												<a href="#"><h3 class="icon fa-linkedin"></h3></a>
											</section>
										</div>
										<div class="3u">
											<section>
												<a href="#"><h3 class="icon fa-github"></h3></a>
											</section>
										</div>
									</div>
								</section>	
							</div>
							<br>
							<h1 style="font-size: 50px;">Coming Soon!</h1>

						<!-- 	<h2><p>Coming soon!</p></h2>
							<p style="font-size: 30px;">Quick and easy grocery deliveries</p> -->
						</div>

					<!-- Nav -->
						<nav id="nav">
							<div id="logo">
								<br>
								<br>
								<h1 style="font-size: 62px;">E-Mart</h1>
							</div>
							<ul>
								<li class="current"><a href="index.php">Home</a></li>
								<li>
									<a href="">Services</a>
									<ul>
										<li><a href="#">Delivery</a></li>
										<li><a href="#">Cart</a></li>
										<li><a href="#">Etiam nisl</a></li>
										<li>
											<a href="">Sed consequat</a>
											<ul>
												<li><a href="#">Lorem dolor</a></li>
												<li><a href="#">Amet consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam nisl</a></li>
												<li><a href="#">Sed feugiat</a></li>
											</ul>
										</li>
										<li><a href="#">Nisl tempus</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.php">Products</a></li>
								<li><a href="#team">Who We Are</a></li>
								<li><a href="#contact">Contact Us</a></li>
							</ul>
						</nav>
				</div>
			</div>
		
		<!-- Intro -->
			<div id="intro-wrapper" class="wrapper style1">
				<div class="title" style="font-size:25px;">What We Do</div>
				<section id="intro" class="container">
						<p class="style2" style="font-size:30px;">
						<a>E-Mart is a brand new way of online shopping, made reliable and painless with our easy to use delivery system. </a>
					</p>
					<p class="style3">Our service emphasizes on <strong>fast</strong> and easy <strong>online</strong> shopping for your everyday <strong>grocery</strong> needs. By signing up, you are able to add <strong>products</strong> to your shopping cart and have
					them delivered to your <strong>doorstep</strong> in no time!
					<ul class="actions">
						<li><button type="button" class="button style3 big" onclick="overlay()">Sign Up</button></li>
					</ul>
				</section>
			</div>

		<!-- Login Modal -->
		<div id="loginModal">
			<form role="form" method="post" action="user/login.php">
			<div class="6u">
				<ul class="actions">
					<li><input type="text" name="email" id="contact-name" placeholder="Email" required=""/></li>
					<li><input type="text" name="password" id="contact-password" placeholder="Password" required=""/></li>
				</ul>
				<ul class="actions">
					<li><button type="submit" class="button style1">Enter</a></li>
					<li><button type="button" class="button style1" onclick="loginModal()">Cancel</a></li>
			</div>
			</form>
		</div>

		<!--  Signup Modal -->
		<div id="overlay">
			<form role="form" method="post" action="user/create.php">
			<div class="6u">
				<ul class="actions">
					<li><input type="text" name="first_name" id="contact-name" placeholder="First Name" required=""/></li>
					<li><input type="text" name="last_name" id="contact-email" placeholder="Last Name" required=""/></li>
				</ul>
				<br>
				<ul class="actions">
					<li><input type="text" name="email" id="contact-password" placeholder="Email" required=""/></li>
					<li><input type="password" name="password" id="contact-confirm-password" placeholder="Password" required=""/></li>
				</ul>
				<br>
				<ul class="actions">
					<li><button type="submit" name="submit" class="button style1">Sign Up</a></li>
					<li><button type="button" class="button style1" onclick="overlay()">Cancel</a></li>
				</ul>
			</form>
			</div>
		</div>

		<!-- Main -->
			<div class="wrapper style2">
				<div class="title">The Details</div>
				<div id="main" class="container">
					
					<!-- Image -->
						<a href="#" class="image featured">
							<img src="images/pic01.jpg" alt="" />
						</a>
					
					<!-- Features -->
						<section id="features">
							<header class="style1">
								<h2>How does our service work?</h2>
							</header>
							<div class="feature-list">
								<div class="row">
									<div class="6u">
										<section>
											<h3 class="icon fa-building">Order from any store</h3>
											<p>Pick any store you regularly shop from, choose their products and when you are ready, add them to your shopping cart.</p>
										</section>
									</div>
									<div class="6u">
										<section>
											<h3 class="icon fa-shopping-cart">Online shopping cart</h3>
											<p>Shopping has never been easier. Our online shopping cart makes it easy to shop for your every day grocery needs.</p>
										</section>
									</div>
								</div>
								<div class="row">
									<div class="6u">
										<section>
											<h3 class="icon fa-calendar">Schedule your delivery</h3>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
									<div class="6u">
										<section>
											<h3 class="icon fa-bus">Fast delivery</h3>
											<p>Eget mattis at, laoreet vel et velit aliquam diam ante, aliquet sit amet vulputate. Eget mattis at, laoreet vel velit lorem.</p>
										</section>
									</div>
								</div>
							</div>
							<ul class="actions actions-centered">
								<li><a href="#" class="button style1 big">Get Started</a></li>
								<li><a href="#" class="button style2 big">More Info</a></li>
							</ul>
						</section>
				
				</div>
			</div>
		
		<!-- Highlights -->
			<div class="wrapper style3">
				<div name="team" class="title"><a name="team"></a>Meet our Team</div>
				<div id="highlights" class="container">
					<div class="row 150%">
						<div class="4u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
								<h3><a href="#">Robert Booth</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button style1">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
								<h3><a href="#">Carlos Grijalva</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button style1">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="4u">
							<section class="highlight">
								<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
								<h3><a href="#">Marcos Braga</a></h3>
								<p>Eget mattis at, laoreet vel amet sed velit aliquam diam ante, dolor aliquet sit amet vulputate mattis amet laoreet lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button style1">Learn More</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<div id="footer-wrapper" class="wrapper">
				<div class="title"><a name="contact"></a>Contact Us</div>
				<div id="footer" class="container">
					<header class="style1">
						<h2>Have a comment or question? Fill out the form below and we will promptly answer it as soon as possible.</h2>
					</header>
					<hr />
					<div class="row 150%">
						<div class="6u">

							<!-- Contact Form -->
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u">
												<input type="text" name="name" id="contact-name" placeholder="Name" />
											</div>
											<div class="6u">
												<input type="text" name="email" id="contact-email" placeholder="Email" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" class="style1" value="Send" /></li>
													<li><input type="reset" class="style2" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

						</div>
						<div class="6u">
						
							<!-- Contact -->
								<section class="feature-list small">
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-home">Mailing Address</h3>
												<p>
													Untitled Corporation<br />
													1234 Somewhere Rd #987<br />
													Nashville, TN 00000-0000
												</p>
											</section>
										</div>
										<div class="6u">
											<section>
												<h3 class="icon fa-comment">Social</h3>
												<p>
													<a href="#">@untitled-corp</a><br />
													<a href="#">linkedin.com/untitled</a><br />
													<a href="#">facebook.com/untitled</a>
												</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-envelope">Email</h3>
												<p>
													<a href="#">info@untitled.tld</a>
												</p>
											</section>
										</div>
										<div class="6u">
											<section>
												<h3 class="icon fa-phone">Phone</h3>
												<p>
													(000) 555-0000
												</p>
											</section>
										</div>
									</div>
								</section>
								
						</div>
					</div>
					<hr />
				</div>
				<div id="copyright">
					<ul>
						<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</div>

	</body>
</html>

