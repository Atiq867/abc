<?php
$con=mysqli_connect('localhost','root','','profile');

if(isset($_POST['submit'])){

    $name=trim(mysqli_real_escape_string($con,$_POST['name']));
    $email=trim(mysqli_real_escape_string($con,$_POST['email']));
    $message=trim(mysqli_real_escape_string($con,$_POST['message']));
    $data="INSERT INTO `info`(`id`,`name`,`email`,`message`) VALUES (null,'$name','$email','$message')";
    $con->query($data);
}

?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Muhammad Atiq</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
	img {
  	border-radius: 50%;
		}
		</style>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" >
					<img src="images/new.jpg" alt="Avatar" style="width:200px " >
						<div class="content" style="background-color:#000000; opacity:0.50">
							<div class="inner">
								<h1>Muhammad Atiq</h1>
								<h4>Web Developer</h4>
								<hr>
								<p><b>Email:</b>atiq.m2003@gmail.com</p>
								<p><b>Mobile:</b>0333-4931615</p>
								<p><b>Address:</b>Faisal Garden, Lahore</p>
							</div>
						</div>
						<nav style="background-color:#000000; opacity:0.50">
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="images/intro.png" alt="" /></span>
								<p>I'm graduated in Computer Science from University of Engineering and Technology,Taxila.I want To enhance my technical and management skills and increase my knowledge about professional business  in order to improve my qualities and benefit the organization.I want To learn how to work professionally inprofessional environment so that my skills will be polished.</p>
							</article>

						<!-- Work -->
							<article id="work">
								<h2 class="major">Work</h2>
								<span class="image main"><img src="images/work.jpg" alt="" /></span>
								<p>I have good experience in web development and web designing using Html5, css3, JavaScript, Bootstrap, PHP,WordPress.</p>
								<h2>Technical Projects</h2>
								<p>&#9658;Online Bus Reservation System (C++)</p>
								<p>&#9658;Automated Teller Machine (C++)</p>
								<p>&#9658;Online Pizza Delivery System (Html5+Css3+php)</p>
								<p>&#9658;E-Voting System (Html5+Css3+php)</p>
								<p>&#9658;Restaurant Management System (Android App)</p>
								<p>&#9658;Enhancement of Live video in foggy weather for driver’s Safety</p>
								<h2>Achievements</h2>
								<p>I got 2nd position in Final Year Project (FYP).The project title is “Enhancement of Live video captured in foggy weather in real-time scenario for driver’s safety."</p>
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">About</h2>
								<span class="image main"><img src="images/3.jpg" alt="" /></span>
								<h2>Freelancer</h2>
								<p>I'm graduated in Computer Science from University of Engineering and Technology,Taxila.I have the required qualification, skill, talent, proficiency and willingness to work hard under any pressure.
								I have experience in web programming as well as web developing that eventually have made me a proficient user of PHP, CSS, HTML, Java,ajax,vue js and more.
								I'm working as a freelancer on fiverr and Upwork. you can visit my profile at <b><a href="https://www.fiverr.com/atiq867">Muhammad Atiq</a></b>
							 </p>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contact</h2>
								<form method="post" action="">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" name="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="https://twitter.com/Atiq12345678" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/muhammad.atiq.357" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/m.atiq56/?hl=en" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/Atiq867" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>

					

					</div>

				

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
