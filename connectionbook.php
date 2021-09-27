<?php
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "classfoxproject";
     $bookname="";
     $bookid="";
     $author="";
     $Publication="";
     $Faculty="";
     $errors = array();
     // connect to db;
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
     die("Failed to connect!");
    }

     //if the register button is clicked
     if(isset($_POST['save'])) {
     	    $bookname=$_POST['bookname'];
          $bookid=$_POST['bookid'];
          $author=$_POST['author'];
          $Publication=$_POST['Publication'];
     	    $Faculty=$_POST['Faculty'];


     	//form validation
     if(empty($bookname)){
               array_push($errors, "Book name is required");
          }
     	 if(empty($bookid)){
               array_push($errors, "Book  ID is required");
          }
           if(empty($author)){
               array_push($errors, "Authoris required");
          }
           if(empty($Publication)){
               array_push($errors, "Publication is required");
          }
     	if(empty($Faculty)){
     		array_push($errors, "Faculty is required");
     	}
     	if(count($errors)==0){

  $sql = "INSERT INTO addbook(bookname,bookid,author,Publication,Faculty) VALUES('$bookname','$bookid','$author','$Publication','$Faculty')";
                header('location: addbook.php');
     		mysqli_query($con,$sql);
               $_SESSION['username'] = $username;
               $_SESSION['success'] = "You are now logged in";
               header('location:regbooks.php');
     	}
     }

     $sql2 = 'select * from author';
     $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
     $author = mysqli_query($conn,$sql2);

?>
