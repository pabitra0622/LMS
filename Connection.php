<?php
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "classfoxproject";
     $fname="";
     $Mname="";
     $lname="";
     $Stdid="";
     $Course="";
     $email = "";
     $Gender= "";
     $errors = array();
     // connect to db;
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
     die("Failed to connect!");
    }

     //if the register button is clicked
     if(isset($_POST['save'])) {
     	$fname=$_POST['fname'];
          $Mname=$_POST['Mname'];
          $lname=$_POST['lname'];
          $Stdid=$_POST['Stdid'];
          $Course=$_POST['Course'];
     	$email=$_POST['email'];
     	$Gender=$_POST['Gender'];

     	//form validation
     if(empty($fname)){
               array_push($errors, "first name is required");
          }
     	 if(empty($lname)){
               array_push($errors, "last name is required");
          }
           if(empty($Stdid)){
               array_push($errors, "Student ID is required");
          }
           if(empty($Course)){
               array_push($errors, "Course is required");
          }
     	if(empty($email)){
     		array_push($errors, "Email is required");
     	}
     	if(empty($Gender)){
     		array_push($errors, "Gender is required");
     	}
     	if(count($errors)==0){

  $sql = "INSERT INTO registration(fname,Mname,lname,Stdid,Course,email,Gender) VALUES('$fname','$Mname','$lname','$Stdid','$Course','$email','$Gender')";
                header('location: registration.php');
     		mysqli_query($con,$sql);
               $_SESSION['username'] = $username;
               $_SESSION['success'] = "You are now logged in";
               header('location:regusers.php');
     	}

     }

?>
