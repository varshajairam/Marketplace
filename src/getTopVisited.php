<?php
	$servername = "localhost";
	$username = "user1";
	$password = "Db272@123";
	$dbname = "marketplace";

	$con=mysqli_connect($servername, $username, $password, $dbname);
	$sql = "select product_id, name, url, count(*) as count from view v left join product p on v.product_id = p.id group by product_id order by count desc limit 5";
	$result = $con->query($sql);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$detail = new stdClass();
			$detail->product_id = $row['product_id'];
			$detail->product_name = $row['name'];
			$detail->product_image = $row['url'];
			$detail->view_count = $row['count'];
			$view[] = $detail;
		}
	}
	print_r(json_encode($view));
	mysqli_close($con);
?>
