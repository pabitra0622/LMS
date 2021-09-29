<?php
  include "Connection.php";
?>
<html>
<head>
<title> Register</title>
<link rel="stylesheet" type="text/css" href="Register.css">
<body>
	<h2>Student Register Here! <h2>
      
		<div class="register">
		<form  name = "registration" action="connection.php" method="post">
				<p>First Name</p>
				<input type="text" id="fname" name="fname" placeholder="Enter First Name"style="margin-left:10px;">

				<p>Middle Name</p>
				<input type="text" id="Mname" name="Mname" placeholder="Enter Middle Name"style="margin-left:10px;">
		
				<p>Last Name</p>
				<input type="text" id="lname" name="lname" placeholder="Enter Last Name"style="margin-left:10px;">
		
					<p>Student's ID</p>
					<input type="text" id="stdid" name="Stdid" placeholder="Enter Student's ID" required="">
		<
				<p> Course<p>
				<select name="Course" name="Course"placeholder="Choose a Course" name="Course" required>
  			<option value="BCA">BCA</option>
  			<option value="BBM">BBM</option>
  			<option value="BBS">BBS</option>
  			<option value="BSW">BSW</option>
				</select><br> <br>
			<p>Email Address</p>
			<input type="text" name="email" placeholder="Enter your Email or Phone Number" name="email" required>
		<p>Gender</p>
								<input type="radio" name="Gender" value="male"  checked>
								<span>Male</span>
								<input type="radio" name="Gender" value="Female"  checked>
								<span>Female</span>
								<input type="radio" name="Gender" value="Others" checked>
								<span>Others</span>  <br> <br>
				<input type="submit" name="save" value="Submit" onclick="alert('Success')">
				<input type="reset" value="Reset">
		</form>
    </div>
</body>
</head>
</html>
