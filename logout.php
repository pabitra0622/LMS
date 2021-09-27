<?php
	session_start();
	session_unset();
	echo("<script>location.href='adminlogin.php?admin=welcome_admin&sms=1'</script>");
?>
