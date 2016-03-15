<!-- Haalt alle content op vanuit de query om het te plaatsen in het editForm -->
<?php

$stap = $result->fetch_assoc();

echo '<form method="post" action="admin.php?stapOption=' . $stapId . '" id="editForm"><h2>Title:</h2> <input type="text" name="title" id="title" value="' .  $stap["title"] . '">';
echo '<h2>Content:</h2><textarea type="text" name="content" id="content" rows="5">' .  $stap["content"] . '</textarea><input type="submit" value="edit" name="edit" id="editButton"></form>';


?>
</div>