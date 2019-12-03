<?php
	header('Access-Control-Allow-Origin: http://jayasuryapinaki.me');
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Max-Age: 1000');
	header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	$servername = "localhost";
	$username = "user1";
	$password = "Db272@123";
	$dbname = "marketplace";

	$con=mysqli_connect($servername, $username, $password, $dbname);
	$user_id = $_POST['user_id'];
	$user_name = $_POST['user_name'];
	$product_id = $_POST['product_id'];
	$description = $_POST['description'];
	$rating_1 = $_POST['rating_1'];
	$rating_2 = $_POST['rating_2'];
	$rating_3 = $_POST['rating_3'];
	$sql = "INSERT INTO review (user_id,user_name,product_id,description,rating_1,rating_2,rating_3) VALUES ($user_id,'$user_name',$product_id,'$description',$rating_1,$rating_2,$rating_3)";
	$con->query($sql);
	echo "Success";
	mysqli_close($con);
?>
