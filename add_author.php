<?php
include "Connection.php";
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Author</title>
	<link rel="stylesheet" type="text/css" href="add_author.css">
</head>
<body>

	    <div class="add_author">
				  <form action="regauth.php" method="post">
	        <h1> Add Author Here!</h1>
	        <form name = "add_author" action="connebook.php" method="post">
	            <p>Author Name</p>
	            <input type="text" name="author_name" placeholder="Author's Name">
	            <p>Author ID</p>
	            <input type="text" name="author_id" placeholder="Authors's ID">
		          <p> Type </p>
	            <input type="text" name="Type" placeholder=" Author's Type">
	            <p>Publication</p>
	            <input type="text" name="Publication" placeholder="Book's Publication">
	            <input type="submit" name="save" value="Add Author" onclick="alert('Success')">
	          </form>
	    </div>
	</body>
</html>

<?php
	if(isset($_POST['authors'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$query = "INSERT INTO `authors` (`author_name`, `author_id`, `Type`, `Publication`) VALUES ('author_name', 'author_id', 'Type', 'Publication')";
		$query_run = mysqli_query($connection,$query);
	}
?>
