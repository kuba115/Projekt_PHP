<?php 

require "connection.php";
require "header.php";

	$title = "Dodaj wpis";

include "partials/subheader.php";

?>

<?php

$post_id = $_POST['post_id'];
var_dump($post_id);

	$sql_str = "SELECT * FROM posts WHERE id = '$post_id'";
	$post_query = mysqli_query($link,$sql_str);
	$post = mysqli_fetch_array($post_query);

	var_dump($post);

?>


<?php
require "footer.php";
?>