<?php
	extract($_POST);
	$myfile = fopen("../assets/logincredentials.txt", "r");
	$line = fgets($myfile);
	$login = explode(",", $line);
	if($username == $login[0] && $pwd == $login[1]){
		header("Location: https://codemode.tech/src/contacts.php");
	} else {
		header("Location: https://codemode.tech/src/userlogin.php?error=true");
	}
	fclose($myfile);
?>
