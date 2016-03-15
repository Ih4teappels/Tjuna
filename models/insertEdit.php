<!-- Insert de nieuwe content die is ingevoerd vanuit het Editform -->
<?php 
if(isset($_POST['edit'])){

	$query = "UPDATE stappen SET title='".$_POST['title']."', content='".$_POST['content']."'WHERE id='".$stapId."'";

	$result = $mysqli->query($query);
}
?>