<?php 

while($stap = $result->fetch_assoc()) {
	echo '<div id="stapSection"><h3>' .  $stap["title"] . '</h3><br>';
	echo '<p>' .  $stap["content"] . '</p><br><br>';
}

?>

