<?php 

// Gebruikersnaam, wachtwoord van de database etc ophalen
require_once 'includes/config.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;
// De database Result to Array function
include 'libs/functions.php';

$stapId = isset($_GET['stapOption']) ? $_GET['stapOption'] : 1;

include 'models/select_stappen.php';

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/mediaqueries.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tjuna|One page website</title>
	<meta name="author" content="Brendan Seijsener, Kevin Meijer, Romana Koster" />
	<meta name="description" content="een uitgebreid stappenplan over de workflow van Tjuna" />
	<meta name="keywords"  content="Stappenplan, Tjuna, Workflow, website, one, page" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link rel="stylesheet" type="text/css" href="css/main.css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				sectionsColor: ['#1EB8A7', '#32a3b1', '#4caebb', '#66bac4', '#7fc6ce', '#b3dce1'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage'],
				menu: '#menu',
				responsiveWidth: 900,

				//equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
				easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',

				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['First page', 'Second page', 'Third page', 'Fourth page', 'Fifth page'],

				verticalCentered: true,
				afterRender: function(){


					//playing the video
					$('video').get(0).play();
				}
			});

		});
	</script>
</head>
<body>
	<ul id="menu">
	<li id="1st" data-menuanchor="firstPage"><a href="#firstPage">Tjuna</a></li>
	<li id="2nd" data-menuanchor="secondPage"><a href="#secondPage">Functioneel Ontwerp</a></li>
	<li id="3rd" data-menuanchor="3rdPage"><a href="#3rdPage">Technisch Ontwerp</a></li>
    <li id="4th" data-menuanchor="4thPage"><a href="#4thPage">Ontwikkeling</a></li>
    <li id="5th" data-menuanchor="5thPage"><a href="#5thPage">Testing</a></li>
    <li id="6th" data-menuanchor="6thPage"><a href="#6thPage">Lancering</a></li>
</ul>
<div id="fullpage">
	<div class="section" id="section0">
        <img src="imgs/logo-use-spaced.png" alt="fullPage" width="450px" />
		<h1>Stappenplan</h1>
		<p>De workflow van Tjuna</p>
		<video autoplay loop muted id="myVideo">
			<source src="imgs/flowers.mp4" type="video/mp4">
			<source src="imgs/flowers.webm" type="video/webm">
		</video>
	</div>

	<?php 
		include 'views/showStap.php';
	?>

</div>
</body>
</html>

