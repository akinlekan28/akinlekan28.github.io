<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Personal Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/avatar.jpg" class="img-responsive img-circle" alt="img.jpg" style="width:180px; height:180px; float:left; border: 0px solid #fff; box-shadow: 0 0 0 6px #49bf9d; margin-left: 20px;" /></a>
					<br><br><h1><strong>I am Olalekan</strong>, a web developer<br />
					responsive site template freebie<br />
					crafted by <a href="http://facebook.com/olalekan.e.akintola">Olalekan Akintola</a>.</h1>
				</div>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2 id="cad">Coding Advocate</h2>
						</header>
						<p>Here at coding advocate we help build solutions, magnify your businesses by linking you up with the largest network out there which is the internet. By building a website for you we create a platform which gives new and existing clients scope of what you offer and how you can make their world a better place. Our team consist of the finest men who will get the job done in no time. We have varieties of pocket friendly packages you can choose from.</p>
						<ul class="actions">
						<!--	<li><a href="#" class="button">Learn More</a></li>-->
						</ul>
					</section>

				<!-- Two -->
					<section id="two">
						<h2>Recent Work</h2>
						<div class="row">
							<article class="6u 12u$(xsmall) work-item">
								<a href="images/fulls/01.jpg" class="image fit thumb"><img src="images/thumbs/01.jpg" alt="" /></a>
								<h3>Magna sed consequat tempus</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="6u$ 12u$(xsmall) work-item">
								<a href="images/fulls/02.jpg" class="image fit thumb"><img src="images/thumbs/02.jpg" alt="" /></a>
								<h3>Ultricies lacinia interdum</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="6u 12u$(xsmall) work-item">
								<a href="images/fulls/03.jpg" class="image fit thumb"><img src="images/thumbs/03.jpg" alt="" /></a>
								<h3>Tortor metus commodo</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="6u$ 12u$(xsmall) work-item">
								<a href="images/fulls/04.jpg" class="image fit thumb"><img src="images/thumbs/04.jpg" alt="" /></a>
								<h3>Quam neque phasellus</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="6u 12u$(xsmall) work-item">
								<a href="images/fulls/05.jpg" class="image fit thumb"><img src="images/thumbs/05.jpg" alt="" /></a>
								<h3>Nunc enim commodo aliquet</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
							<article class="6u$ 12u$(xsmall) work-item">
								<a href="images/fulls/06.jpg" class="image fit thumb"><img src="images/thumbs/06.jpg" alt="" /></a>
								<h3>Risus ornare lacinia</h3>
								<p>Lorem ipsum dolor sit amet nisl sed nullam feugiat.</p>
							</article>
						</div>
						<ul class="actions">
							<li><a href="#" class="button">Full Portfolio</a></li>
						</ul>
					</section>

				<!-- Three -->
					<section id="three">
						<h2>Get In Touch</h2>
						<p>To get accross to our team for your web development projects such as portfolio websites, landing pages, e-Cormmerce websites and School portals. Our contact details is listed below, if you also want to reach us through our e-mail you can fill the form below.</p>
						<div class="row">
							<div class="8u 12u$(small)">
								
							    <?php
    //if "email" variable is filled out, send email
      if (isset($_REQUEST['from_email']))  {
      
      //Email information
      $admin_email = "akinlekan@gmail.com";
      $email = $_REQUEST['from_email'];
      $subject = $_REQUEST['subject'];
      $message = $_REQUEST['message'];
      
      //send email
      mail($admin_email, "$subject", $message, "From:" . $from_email);
      
      //Email response
      echo "Thank you for contacting us. Our customer reprisentative will attend to you very soon";
      }
      
      //if "email" variable is not filled out, display the form
      else  {
    ?>
								<form method="post" action="index.php">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)"><input type="text" name="from_name" id="name" placeholder="Full Name" /></div>
										<div class="6u$ 12u$(xsmall)"><input type="email" name="from_email" id="email" placeholder="Email" /></div>
										<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4"></textarea></div>
									</div>
								</form>
								<?php } ?>
								
								
								<ul class="actions">
									<li><input type="submit" value="Send Message" /></li>
								</ul>
							</div>
							<div class="4u$ 12u$(small)">
								<ul class="labeled-icons">
									<li>
										<h3 class="icon fa-home"><span class="label">Address</span></h3>
										No 3 Ogooluwa CDA Apakila,<br />
										Camp Abeokuta Ogun,<br />
										Nigeria.
									</li>
									<li>
										<h3 class="icon fa-mobile"><span class="label">Phone</span></h3>
										234-8106473790
									</li>
									<li>
										<h3 class="icon fa-envelope-o"><span class="label">Email</span></h3>
										<a href="#">akinlekan@gmail.com</a>
									</li>
								</ul>
							</div>
						</div>
					</section>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="http://twitter.com/akinlekan28" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="http://github.com/akinlekan" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="http://facebook.com/olalekan.e.akintola" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="http://akinlekan28@yahoo.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; 2016</li><li>Design: <a href="http://facebook.com/olalekan.e.akintola">Olalekan Akintola</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
