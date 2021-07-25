<?php 
	require_once '../database/connect.php';

	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$title = $_POST['title'];
	$ingredients = $_POST['ingredients'];
	$description = $_POST['description'];
	$steps = $_POST['steps'];

	//image1

	mysqli_query($connect, query: "INSERT INTO `contact test` (`id`, `Firstname`, `Lastname`, `Email`, `title`, `ingredients`, `description`, `steps`) VALUES (NULL, '$Firstname', '$Lastname', '$Email', '$title', '$ingredients', '$description', '$steps')");
	
	header('Location: ../contact.php');
?>