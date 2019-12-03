<?php
	if(isset($_COOKIE['userName']) && isset($_COOKIE['userId'])) {
	    header("Location: ./marketplace.php");
	}
?>