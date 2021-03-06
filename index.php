<!DOCTYPE html>
<?php 
//Hoofdpagina Tjuna One Page

// Gebruikersnaam, wachtwoord van de database etc ophalen
require_once 'includes/config.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

include 'models/select_stappen.php';

?>


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
				sectionsColor: ['#2d929f', '#32a3b1', '#4caebb', '#66bac4', '#7fc6ce', '#b3dce1'],
				anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage', '5thPage', '6thPage'],
				menu: '#menu',
				responsiveWidth: 900,

				//equivalent to jQuery `easeOutBack` extracted from http://matthewlein.com/ceaser/
				easingcss3: 'cubic-bezier(0.175, 0.885, 0.320, 1.275)',

				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Tjuna', 'Functioneel Ontwerp', 'Technisch Ontwerp', 'Ontwikkeling', 'Testing', 'Lancering'],

				verticalCentered: true,
				css3:false
			});

		});
	</script>
</head>
<body>
<div id="menu">
	<ul>
	<li id="1st" data-menuanchor="firstPage"><a href="#firstPage">Tjuna</a></li>
	<li id="2nd" data-menuanchor="secondPage"><a href="#secondPage">Functioneel Ontwerp</a></li>
	<li id="3rd" data-menuanchor="3rdPage"><a href="#3rdPage">Technisch Ontwerp</a></li>
    <li id="4th" data-menuanchor="4thPage"><a href="#4thPage">Ontwikkeling</a></li>
    <li id="5th" data-menuanchor="5thPage"><a href="#5thPage">Testing</a></li>
    <li id="6th" data-menuanchor="6thPage"><a href="#6thPage">Lancering</a></li>
</ul>
</div>
<div id="fullpage">
	<div class="section" id="section0">
		<img src="imgs/logo.png" alt="TjunaLogo">
		<h1>Volg hier het stappenplan</h1>
		<h2>De workflow van Tjuna</h2>
		<img src="imgs/pijl.png" id="pijl" alt="arrowDown">
	</div>

	<?php 
		include 'views/showStap.php';
	?>

</div>
</body>
</html>