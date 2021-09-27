<?php
	require('functions.php');
	session_start();
	if(!isset($_SESSION['username']))
	{
		echo "<script>location.href='adminlogin.php'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<font style="color: white"><span><strong> <?php echo $_SESSION['username'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username'];?></a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
	<div class="container-fluid">
		<ul class="nav navbar-nav navbar-center">
			<li class="nav-item">
				<a href="dashboard.php" class="nav-link">Dashboard</a>
			</li>

	<li class="nav-item dropdown">

				<ul class="dropdown">
				<a href="addbook.php" class="dropdown-item">Add New Book</a>
					<a href="manage_book.php" class="dropdown-item">Manage Books</a>
				</ul>
			</li>
			<li class="nav-item dropdown">

				<ul class="dropdown">
					 <a href="add_cat.php" class="dropdown-item">Add New Category</a>
					<a href="manage_cat.php" class="dropdown-item">Manage Category</a>
			</ul>
			<li class="nav-item dropdown">

				<ul class="dropdown">
					<a href="add_author.php" class="dropdown-item">Add New Author</a>
					<a href="manage_author.php" class="dropdown-item">Manage Authors</a>
				</ul>
			</li>
			<li class="nav-item">
				<a href="issue_book.php" class="nav-link">Issue Book</a>
			</li>
		</ul>
	</div>
</nav>

	<span><marquee>Welcome to Online Library Management System. <br>
		 Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 320px">
				<div class="card-header">Registered Users:</div>
				<div class="card-body">
					<p class="card-text">No of total users: <?php echo get_user_count();?></p>
					<a href="regusers.php" class="btn btn-danger" target="_blank">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 320px">
				<div class="card-header">Registered Books:</div>
				<div class="card-body">
					<p class="card-text">No of available books: <?php echo get_book_count();?></p>
					<a href="regbooks.php" class="btn btn-primary" target="_blank">View Registered Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Category:</div>
				<div class="card-body">
					<p class="card-text">No of Book's category: </p>
					<a href="regcat.php" class="btn btn-info" target="_blank">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Issued Books:</div>
				<div class="card-body">
					<p class="card-text">No Issued Books: <?php echo get_issued_book_count();?></p>
					<a href="view_issued_book.php" class="btn btn-success" target="_blank">View Issued books</a>
				</div>
			</div>
		</div> 
		
		<div class="col-md-3">
			<div class="card bg-light" style="width: 320px">
				<div class="card-header"> Books By Authors</div>
				<div class="card-body">
					<p class="card-text">No of available Books: <?php echo get_book_count();?></p>
					<a href="regbooks.php" class="btn btn-primary" target="_blank">View Books By Authors</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card bg-light" style="width: 320px">
				<div class="card-header">Books By Category:</div>
				<div class="card-body">
					<p class="card-text">No of Book's category: </p>
					<a href="regcat.php" class="btn btn-info" target="_blank"> View Books By Category</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
