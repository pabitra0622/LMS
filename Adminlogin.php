<?php
include "connection.php";
  session_start();
  if(isset($_SESSION['username']))
  {
    echo "<script>location.href='Dashboard.php'</script>";
  }
?>
<html>
<head>
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>

	<?php
if(isset($_POST['uname']) && isset($_POST['pword']))
{
	$username=$_POST['uname'];
	$password=md5($_POST['pword']);
	$sql="SELECT * FROM login WHERE username='$username' AND password='$password'";
	$rec= mysqli_query($con,$sql);
	$res=mysqli_num_rows($rec);
	if($res)
	{
		$_SESSION['username']=$username;
		echo "<script>location.href='Dashboard.php'</script>";
	}
	else {
		echo "<script>location.href='adminlogin.php?page=login&msg=0'</script>";
	}
}
else
{
?>
		<form class="admin_loginfrm" action="" method="post" onsubmit="return validateadmin()">
			<p class="err_msg" id="err_msg">
				<?php
		if(isset($_REQUEST['msg']))
		{
			?>
				<span style="color:#ee0000;">Invalid username/password.</span>
			<?php
		}
		?>
        <?php
			if(isset($_REQUEST['sms']))
			{
				switch($_REQUEST['sms']){
					case 1:
					?>
						<span style="color:#CD6702;">Logout Successfully.</span>
                    <?php
					break;
				}
			}
		?>
			</p>
			<div>
				<div class="admin_fline">Username:</div>
				<div class="admin_lline"><input type="text" name="uname" id="uname" /></div>
			</div>
			<div class="clear">
				<div class="admin_fline">Password:</div>
				<div class="admin_lline"><input type="password" name="pword" id="pword" /></div>
			</div>
			<div class="clear">
				<div class="admin_fline">&nbsp;</div>
				<div class="admin_lline"><input type="submit" value="Log In" /></div>
			</div>
			<div class="clear"></div>
		</form>
<?php
}
?>
</body>
</head>
</html>
