<?php
include "base.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Officers</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<!-- Note: The "styleN" class below should match that of the banner element. -->
					<header id="header" class="alt style2">
						<a href="index.php" class="logo"><strong>SHPE</strong> <span>at UT Dallas</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.php">Home</a></li>
                                                        <li><a href="newsletter.php">Newsletter</a></li>
							<li><a href="calendar.php">Calendar</a></li>
							<li><a href="#contact">Contact</a></li>
                                                        <?php
                                                        if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['EmailAddress']))
                                                        {
                                                                ?>
                                                                <li><a href="dashboard.php" class="button special">Dashboard</a></li>
                                                                <li><a href="logout.php" class="button">Log Out</a></li>
                                                                <?php
                                                        }
                                                        else
                                                        {
                                                                ?>
                                                                <li><a href="login.php" class="button special">Log In</a></li>
                                                                <?php
                                                        }
                                                        ?>
						</ul>
					</nav>

				<!-- Banner -->
				<!-- Note: The "styleN" class below should match that of the header element. -->
					<section id="banner" class="style2">
						<div class="inner">
							<span class="image">
								<img src="images/pic07.jpg" alt="" />
							</span>
							<header class="major">
								<h1>Our Officers</h1>
							</header>
							<div class="content">
								<p>Current and Past</p>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<h2>Make sure to visit:</h2>
										<a href="officers(16-17).php" class="button next">Hall of Past Officers</a>
								</div>
							</section>

						<!-- Two -->
							<header>
								<br>
								<h2>&nbsp&nbspExecutive Officers</h2>
							</header>
							<section id="two" class="spotlights">
								<section>
									<img src="images/officers/president.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Emily Lomas</h3>
												<h4>President</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:Emily.Lomas-Martinez@utdallas.edu" target="_blank">Emily.Lomas-Martinez@utdallas.edu</a> 
                                            </p>
                                        </div>
									</div>
								</section>
								<section>
									<img src="images/officers/vice-president.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Mariajose Plascencia</h3>
												<h4>Vice-President</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:Mariajose.Plascencia@utdallas.edu" target="_blank">Mariajose.Plascencia@utdallas.edu</a> 
                                            </p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/secretary.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Lizbeth Zamora</h3>
												<h4>Secretary</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:Lizbeth.Zamora@utdallas.edu" target="_blank">Lizbeth.Zamora@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/treasurer.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Jaquelin Rojas</h3>
												<h4>Treasurer</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:jxr175030@utdallas.edu" target="_blank">jxr175030@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/shpe_jr.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Diana Lopez</h3>
												<h4>SHPE Jr. Chair</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:dnl170000@utdallas.edu" target="_blank">dnl170000@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/academic.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Carlos Morin</h3>
												<h4>Academic Chair</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:Carlos.MorinGuzman@utdallas.edu" target="_blank">Carlos.MorinGuzman@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/corporate.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Joselyn Narvaez</h3>
												<h4>Corporate Liaison</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="jvn170000@utdallas.edu" target="_blank">jvn170000@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/technology.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Miguel Lemos</h3>
												<h4>Technology Chair</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="Miguel.LemosFerreira@UTDallas.edu" target="_blank">Miguel.LemosFerreira@UTDallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/recruitment_retention.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Arath Paneet</h3>
												<h4>Recruitment and Retention</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:axp155830@utdallas.edu" target="_blank">axp155830@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/shpe_jr_app.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Clareth	Mota</h3>
												<h4>SHPE Jr. Appointed Chair</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:cgm170001@utdallas.edu" target="_blank">cgm170001@utdallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/alumni.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Arath Paneet</h3>
												<h4>Alumni Liaison</h4>
											</header>
											<p>
                                                <!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:axp155830@utdallas.edu" target="_blank">axp155830@utdallas.edu</a>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/school_affairs.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Sigifredo Linares</h3>
												<h4>School Affairs</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:Sigifredo.Linares@UTDallas.edu" target="_blank">Sigifredo.Linares@UTDallas.edu</a>
											</p>
										</div>
									</div>
								</section>
								<section>
									<img src="images/officers/public.jpg" alt="" data-position="center center" height=30% width=30%/>
									<div class="content">
										<div class="inner">
											<header class="major">
												<h3>Blanca Chavez</h3>
												<h4>Public Relations</h4>
											</header>
											<p>
												<!-- Biography goes here-->
												<b>Email:</b> <a href="mailto:bic170000@utdallas.edu" target="_blank">bic170000@utdallas.edu</a>
												</p>
										</div>
									</div>
								</section>
							</section>
						<!-- Three -->
							<section id="three">
								<div class="inner">
									<header class="major">
										<h2>Want to become an officer?</h2>
									</header>
									<p>Join the Freshmen RoundTable to make an impact alongside an officer mentor.</p>
									<ul class="actions">
										<li><a href="mailto:Emily.Lomas-Martinez@utdallas.edu?Subject=I%20would%20like%20to%20join%20the%20Freshmen%20RoundTable" class="button" target="_blank">Contact Emily Lomas</a></li>
									</ul>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>800 W Campbell Rd.<br />
										Richardson, TX 75080<br />
										United States of America</span>
									</div>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="mailto:utdshpe@gmail.com" target="_blank">utdshpe@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="icons">
										<ul class="icons">
											<li><a href="https://twitter.com/shpeutd?lang=en" class="icon alt fa-twitter" target="_blank"><span class="label" >Twitter</span></a></li>
											<li><a href="https://www.facebook.com/SHPEUTD/" class="icon alt fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/shpeutd/" class="icon alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
										</ul>
										<h3>Follow us on Social Media</h3>
									</div>
								</section>
							</section>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>