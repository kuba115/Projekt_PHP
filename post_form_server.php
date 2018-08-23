<?php

require "connection.php";
session_start();

if (isset($_POST['add_post']) ) {

	$post_title = $_POST['title'];
	$post_content = $_POST['content'];


	$add_post_str = "INSERT INTO `posts` (`id`, `title`, `content`) VALUES (NULL, '$post_title', '$post_content');";


	$add_post = mysqli_query($link,$add_post_str);

	$_SESSION['title'] = $post_title;
	$_SESSION['content'] = $post_content;
	$_SESSION['add_post'] = $add_post;

	header('Location: post_form.php');
	exit();

	}
?>