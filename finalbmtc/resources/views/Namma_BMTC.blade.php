<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Namma BMTC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets111/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets111/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets111/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets111/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="" class="logo"><strong>Namma BMTC</strong> <span>AIMS Higher education</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
						</ul>
						<ul class="actions vertical">
							<li><a href="register" class="button special fit">Get Started</a></li>
							<li><a href="login" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Namma BMTC</h1>
							</header>
							<div class="content">
								<p>A responsive site for ticket automation<br /></p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images111/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="login" class="link">Login</a></h3>
										<p>Recharge for ticket generation</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images111/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="register" class="link">Register</a></h3>
										<p>To experience automation of new way to generate tickets in real world</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images111/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="admin" class="link">Admin</a></h3>
										<p>Admin Login</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images111/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="cbusnumber" class="link">Conductor Page</a></h3>
										<p>Page for BMTC conductors to generate tickets</p>
									</header>
								</article>
								<!-- <article>
									<span class="image">
										<img src="images111/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Consequat</a></h3>
										<p>Ipsum dolor sit amet</p>
									</header> 
								</article>
								<article>
									 <span class="image">
										<img src="images111/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="landing.html" class="link">Etiam</a></h3>
										<p>Feugiat amet tempus</p>
									</header> 
								</article> -->
							</section>

						<!-- Two -->
							<section id="two">
								<!-- <div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>
								</div> -->
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form action="{{ url('/') }}" method="POST">
								{{ csrf_field() }}
									<div class="field half first">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field half">
										<label for="name">Subject</label>
										<input type="text" name="subject" id="subject" />
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">ullas.sharma01@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(+91) 7204680964</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>#A-137<br />
										Sector-2, HMT colony<br />
										Bangalore- 560013</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<!-- <ul class="icons">
								<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
							</ul> -->
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets111/js/jquery.min.js"></script>
			<script src="assets111/js/jquery.scrolly.min.js"></script>
			<script src="assets111/js/jquery.scrollex.min.js"></script>
			<script src="assets111/js/skel.min.js"></script>
			<script src="assets111/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets111/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets111/js/main.js"></script>

	</body>
</html>