<!-- Query voor het ophalen van één specifiek gedeelte van de content om het te editen vanuit get editform -->
<?php 
	
	$sql = "SELECT * FROM stappen WHERE id = '". $stapId ."'";

	$result = $mysqli->query($sql);

?>