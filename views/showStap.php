<?php 
for ($i=1 & $j=1; $i & $j < 5; $i++ & $j) { 

while($stap = $result->fetch_assoc()) {
	echo '<div class="section" id="section'. $i++ . '"><div class="intro"><div class="sectionHeader"><h1>' . $stap["title"] . '</h1></div>';
	echo  '<div class="sectionContent"><p>' . $stap["content"] . '</p><img id="plaatje' . $j++ . '" src="imgs/' . $stap['image'] . '" alt="cool">' . '</div></div></div>';
}
}
?>