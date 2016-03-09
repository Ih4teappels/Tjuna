<?php 

// Gebruikersnaam, wachtwoord van de database etc ophalen
require_once 'includes/config.php' ;
// Maak de database connectie
require_once 'includes/database.php';


$stapId = isset($_GET['stapOption']) ? $_GET['stapOption'] : 1;


// if(isset($_POST['stapOption'])) $stapId = $_POST['stapOption'];

require_once 'models/select_singleStap.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title>Tjuna Workflow</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<?php 
	include 'views/adminHeader.php';
?>
<?php 

	

	include 'views/optionForm.html';

	

?>




<div id="section1">

	<h2>Update Stap <?php echo $stapId;?></h2>


<?php

	// include 'views/stappen.php';

	include 'models/insertEdit.php';
	

	include 'views/editForm.php';



?>
		
</div>
</div>
</div>
</body>
</html>



	
	

