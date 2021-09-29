<?php
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "classfoxproject";
     $bookname = "";
     $bookid = "";
     $author = "";
     $Publication = "";
     $Faculty = "";
     $errors = array();
    if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
     die("Failed to connect!");
    }
     if(isset($_POST['save'])) {
          $bookname = $_POST['bookname'];
     	    $bookid=$_POST['bookid'];
              $catid  = $_POST['category'];
              $author = $_POST['author'];
          $author=$_POST['author'];
          $Publication=$_POST['Publication'];
     	    $Faculty=$_POST['Faculty'];
     

  $sql = "INSERT INTO  `addbook`(`bookname`, `bookid`, `author`, `Publication`, `Faculty`,`author_id`,`cat_id`)
   VALUES ('$bookname','$s','$author','$Publication','$Faculty','$author','$catid')";
             
     	$insert = mysqli_query($con,$sql);
          if($insert){
               $_SESSION['username'] = $username;
               $_SESSION['success'] = "book add Successfully!!";
               header("location: regbooks.php");
          }
              
     	
     }

     //login users
    /* if (isset($_POST['login'])){
          if(isset($_POST['username']) && !empty($_POST['username'])){
               if(isset($_POST['password']) && !empty($_POST['password'])){
                $username=$_POST['username'];
                $pass=$_POST['password'];
                $sql2="SELECT * FROM tbl_user WHERE username='$username'";
                $res=mysqli_query($con,$sql2);
                if(mysqli_num_rows($res)>0){
                    while($row=mysqli_fetch_assoc($res)){
                         $password=['confirm_password'];
                         $dpassword=$row['password'];
                         $npassword=md5($password,$pass);
                         if($dpassword=$npassword){
                              echo "<script>alert('Login Successfully')</script>";
                         }
                         else{
                              echo "<script>alert('Password is wrong')</script>";
                         }
                    }
                }
                else{
                    echo "<script>alert('username is wrong')</script>";
                }
               }
               else{
                   echo "<script>alert('please insert password to continue')</script>";
               }
          }
          else{
              echo "<script>alert('please insert username')</script>";          }
     }


     //logout
     if (isset($_GET['logout'])){
          session_destroy();
          unset($_SESSION['username']);
          header('location: login.php');
     }
*/
?>
