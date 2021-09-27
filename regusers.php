<?php
	require('functions.php');
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"classfoxproject");
	$fname = "";
	$Mname = "";
	$lname = "";
	$Stdid = "";
	$Course = "";
	$email = "";
	$Gender = "";

	$query = "select * from registration";

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">

  	<style type="text/css">
		#side_bar{

font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}

#side_bar td, #side_bar th {
border: 1px solid #ddd;
padding: 8px;
}

#side_bar tr:nth-child(even){background-color: #f2f2f2;}

#side_bar tr:hover {background-color: #ddd;}

#side_bar th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;

color: white;
		}
	</style>
</head>
<body>
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">

<span><marquee> Welcome to Online Libarary Management System. This is library Management System. Library opens at 6:00 AM and close at 5:45 PM</marquee></span><br><br>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-7">
		<form>
			<table class="table-bordered" width="1200px" style="text-align: center" background-color:#F6F6F6;>
				<table id="side_bar">
				<tr>
					<th background-color: #F6F6F6>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Stdid</th>
					<th>Course</th>
					<th>Email</th>
					<th>Gender</th>
				</tr>

				<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$fname = $row['fname'];
						$Mname = $row['Mname'];
						$lname = $row['lname'];
						$Stdid = $row['Stdid'];
						$Course = $row['Course'];
						$email = $row['email'];
						$Gender = $row['Gender'];

				?>
						<tr>
							<td><?php echo $fname;?></td>
							<td><?php echo $Mname;?></td>
							<td><?php echo $lname;?></td>
							<td><?php echo $Stdid;?></td>
							<td><?php echo $Course;?></td>
							<td><?php echo $email;?></td>
							<td><?php echo $Gender;?></td>
						</tr>
						<?php
					}
				?>
			</table>
		</form>
	</div>
	<div class="col-md-2"></div>
</div>

</body>
</html>
