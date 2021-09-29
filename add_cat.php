<?php
	require('functions.php');
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="add_cat.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library Management System(LMS)</a>
			</div>
	<span><marquee>Welcome to Online Library Management System.  Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="regcat.php" method="post">
				<div class="form-group">
					<div class="side-nav-categories">
						<div class="addbook_category">
				        <h1> Add  Category</h1>
				        <form name = "addbook_category" action="connebook.php" method="post">
				            <p>Category</p>
				            <input type="text" name="Category" placeholder="Book's Category">
							<p>Category Id</p>
				            <input type="text" name="cat_id" placeholder="Category ID">
				            
				            <input type="submit" name="save" value="Add Category " onclick="alert('Success')">
				          </form>
				    </div>
				</body>
				</html>
<?php
	if(isset($_POST['add_cat'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"classfoxproject");
		$query = " INSERT INTO `category` (`cat_name`, `cat_id`) values('','$_POST[cat_name]')";
		$query_run = mysqli_query($connection,$query);
	}
?>
