<?php 
$connect = mysqli_connect('127.0.0.1','mysql','mysql','project');
	$insert = 'INSERT INTO projects (Img,Name,Description)VALUES("'.$_GET["Img"].'","'.$_GET["Name"].'","'.$_GET["Description"].'")';
 mysqli_query($connect,$insert);
	header('Location: newProject.php')
	?>