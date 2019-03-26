<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//include ('sendmail.php');

$title="Mr Jason";
$accueil='Aujourd\'hui nous sommes Mardi';
//$accueil='Bienvenue chez $title '.$title;
//$accueil="Bienvenue chez \$title $title";
//$accueil="Bienvenue chez \$title";
//$accueil='Ici on parle de $variable '.$title." eheh";
$accueil2="Ceci est mon site";
$buttonmore="En savoir plus";
//echo "bonjour";
?>
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			.sendMsg{
				padding: 10px 0;
				position: fixed;
				z-index: 999;
				bottom: 10px;
				width: 100%;
				background: greenyellow;
				color: #282828;
				left: 0;
				text-align: center;
			}
			.errorMsg{
				background: red;				
			}
		</style>
	</head>
	<body class="landing">
		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.html"><?=$title?></a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<i class="icon fa-diamond"></i>
				<h2><?=$accueil ?></h2>
				<p><?=$accueil2 ?></p>
				<ul class="actions">
					<li><a href="#" class="button big special"><?=$buttonmore?></a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>Integer vitae libero acrisus egestas placerat  sollicitudin</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>Integer vitae libero acrisus egestas placerat  sollicitudin</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Aliquam Blandit Mauris</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<div class="image-grid">
						<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
						<a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
					</div>
					<ul class="actions">
						<li><a href="#" class="button big alt">Tempus Aliquam</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Magna sed consequat tempus</h2>
						<p>Ipsum dolor tempus commodo turpis adipiscing Tempor placerat sed amet accumsan</p>
					</header>
					<ul class="actions">
						<li><a href="#" class="button big alt">Magna feugiat</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="contact" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Ipsum dolor tempus commodo adipiscing</p>
					</header>
					<!-- <form action="index.php#contact" method="POST"> -->
					<form id="contact" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="subject" placeholder="Name" type="text" required/>
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="mail" placeholder="Email" type="email" required/>
								</div>
								<div class="12u$">
									<textarea name="content" placeholder="Message" rows="4" required></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special submit" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<!-- <script src="assets/js/jquery.min.js"></script> -->
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
				$(function () {
					$("form").submit(function (event) {
						event.preventDefault();
						$('form').validate();				
						$.ajax({
							type: "POST",
							url: "sendmail.php",
							data: $('form').serialize(),
							dataType : "json",
							success: function (data) {
								if(data == "success"){
									$('body').append('<div class="sendMsg">Message has been sent</div>');
								}else if(data == "error"){
									$('body').append('<div class="sendMsg errorMsg">Error</div>');	
								}	
								setTimeout(function(){ $('.sendMsg').remove(); }, 4000);	
								$('form').trigger("reset");														
							}						
						});
					});
				});			
			</script>		
					
	</body>
</html>