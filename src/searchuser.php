<?php
	session_start();
	extract($_POST);
	$_SESSION['searchStr'] = $input;
	header("Location: https://codemode.tech/src/user.php");
?>
