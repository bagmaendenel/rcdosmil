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


		<title>Rc dos mil.nl - home</title>
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
			<div class="index col-xs-16 col-md-12 col-md-push-2 col-lg-10 col-lg-push-3">
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
								<li class="active"><a href="docent.php">Docent</a></li>
								<li><a href="lessen.php">Lessen</a></li>
								<li><a href="contact.php">Contact</a></li>
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
				<div class="col-xs-16 noPadding">
					<h3>Over mij</h3>
				</div>
				<div class="content col-xs-16 col-md-11 noPadding">
					<article>
						Mijn naam is Robien Kuijten en ik ben een echte liefhebber van de Spaanse taal en cultuur. 
						Na mijn middelbare school heb ik een jaar in Madrid gewoond en een cursus voor buitenlanders aan de universiteit gevolgd. 
						Ik ben naar Spanje vertrokken zonder een woord Spaans te spreken (een uitstekende manier om de taal goed te leren!) 
						en woonde op een campus met overwegend Spaanstalige mensen. Aansluitend heb ik mijn propedeuse Spaanse taal en 
						letterkunde behaald in Utrecht en ben toen overgestapt naar Europese Studies in Amsterdam. Met een Erasmusbeurs ben ik toen wederom 
						een jaar naar Madrid gegaan waar ik vakken gevolgd heb aan de Economische Faculteit. In 1992 ben ik afgestudeerd en direct naar Spanje vertrokken 
						om uiteindelijk in Barcelona te belanden waar ik kon werken in het Olympisch Dorp tijdens de Olympische- en Paralympische Spelen. 
						Na een klein jaar ben ik teruggekeerd naar Nederland en gaan werken op een alarmcentrale (hulpverlening aan Nederlandse toeristen in het buitenland).
						<br/><br/>
						Ik woon sinds 1998 in Maastricht. Vanaf 2000 ben ik freelance opdrachten gaan doen en sinds 2003 ben ik gestart met het geven van Spaanse lessen. 
						In 2009 heb ik een propedeuse behaald aan de Lerarenopleiding van Fontys in Tilburg, met als 1 van de onderdelen een stage op een middelbare school 
						in Maastricht. Daarnaast heb ik lesgegeven aan kinderen van groep 7 en 8 op een basisschool in Maastricht. 
						Ook geef ik les aan een groep hoogbegaafde leerlingen op een middelbare school in Meerssen en verzorg ik lessen Spaans op een 
						taleninstituut in Maastricht.<br/><br/>

						Eén van de leukste dingen van het lesgeven vind ik de enorme vorderingen die mijn cursisten maken. 
						De lessen worden in een ontspannen sfeer gegeven met veel aandacht voor de cultuur van Spanje en andere Spaanstalige landen.
					</article>
				</div>
				<div class="col-md-5" style="text-align:center;">
					<img src="img/spaanse_les_Docent.png" alt="afbeelding docent" style="margin-top:25px;">
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