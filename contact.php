<?php 
	$date = new DateTime();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="author" content="Lars Rasmussen" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
		<meta name="description" content="Rc dos mil, spaanse les, maastricht" />
		<meta name="dcterms.rightsHolder" content="Lars Rasmussen"/>  


		<title>Rc dos mil.nl - contact</title>
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
		<!--<link rel="stylesheet" href="/printstyle.css" type="text/css" media="print" />-->
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<style>

		@media only screen and (min-width:0px){
			.contactInfo {
				margin-top:25px;
			}
			
			.navbar-default .navbar-collapse, .navbar-default .navbar-form {
				float:left;
			}
		}
		@media only screen and (min-width:768px){

			
			.button {
				margin:0px 15px;
			}
			
			.navbar-default .navbar-collapse, .navbar-default .navbar-form {
				float:right;
			}
		}
		/*MD*/
		@media only screen and (min-width:992px){
			.navbar-default .navbar-collapse, .navbar-default .navbar-form {
				float:right;
			}
		
		}
		@media only screen and (min-width:1200px){
			.navbar-default .navbar-collapse, .navbar-default .navbar-form {
				float:right;
			}
		}
		
		
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="contact col-xs-16 col-md-12 col-md-push-2 col-lg-10 col-lg-push-3">
				<div class="pagehead">
					<a href="http://www.rcdosmil.nl"><img src="img/logo.png" alt="" class="logo"></a>
					<div class="social">
						<a href="https://www.facebook.com/RC-dos-mil-186248634748010/"><img src="img/facebook.png" alt="facebook icon"></a>
						<a href="https://nl.linkedin.com/in/robien-kuijten-69b134a"><img src="img/linkedin.png" alt="linkedin icon"></a>
					</div>
					<div class="header">
						<nav class="navbar navbar-default">
						  <div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
							  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							  </button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							  <ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="docent.php">Docent</a></li>
								<li><a href="lessen.php">Lessen</a></li>
								<li class="active"><a href="contact.php">Contact</a></li>
							  </ul>
							  
							</div><!-- /.navbar-collapse -->
						  </div><!-- /.container-fluid -->
						</nav>	
					</div>
					<div class="slider">
						<div id="contentSlider">
							<div class="item"><img src="img/img1.jpg" alt=""></div>
							<div class="item"><img src="img/img2.jpg" alt=""></div>
							<div class="item"><img src="img/img3.jpg" alt=""></div>
							<div class="item"><img src="img/img4.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="content col-xs-16 col-md-16 noPadding">
					<h3>Heeft u vragen? Mail ons gerust!</h3>
					<article class="col-lg-11">
						<?php
						if(empty($_GET['send'])) {
						?>
						<p class="contentDetail">					
							<form method="post" action="mailto.php" class="form" id="form1">
								<p class="name">
									<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Naam" id="name" autocomplete="off" />
								</p>
								<p class="email">
									<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" autocomplete="off" />
								</p>
								<p class="text">
									<textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Bericht" autocomplete="off"></textarea>
								</p>
								<div class="submit">
									<input class="button col-xs-16 col-lg-5" name="submit" type="submit" value="Verstuur!" />
								</div>
							</form>
						</p>
							<?php 
						} else {
							echo '<p style="margin-top:25px; margin-left:-15px;">Bedankt voor uw email, wij zullen zo snel mogelijk reageren.<br/> Met vriendelijke groet,</br> Rcdosmil</p>';
						}
						?>
					</article>
					<div class="contactInfo">
						<article class="col-lg-5">
							<img src="img/seperator_mail.png" alt="seperator mail"><br>
							<span>info@rcdosmil.nl</span>
							<img src="img/seperator_phone.png" alt="seperator telefoon"><br/>
							<span>06-391-244645</span>
							<img src="img/seperator_kvk.png" alt="seperator kvk"><br/>
							<span>KVK: 56857918</span>
						</article>
					</div>
				</div>
			
			</div> <!-- #page -->
			<div class="footer col-xs-16 col-md-12 col-md-push-2">	
				<span>&copy; <?php echo $date->format('Y'); ?> RC dos mil.nl</span>
			</div>	
		</div>
		<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>