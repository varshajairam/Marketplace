<?php
	$servername = "localhost";
	$username = "user1";
	$password = "Db272@123";
	$dbname = "marketplace";

	$prod_id = $_GET['product_id'];
	$user_id = $_GET['user_id'];
	$user_name = $_GET['user_name'];

	$con = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "select p.id as pid, p.name, p.description as pdesc, p.price, p.url, coalesce(avg(rating_1), 0) as rating1, coalesce(avg(rating_2), 0) as rating2, coalesce(avg(rating_3), 0) as rating3 from product p left join review r on p.id = r.product_id where p.id = $prod_id group by p.id";
	$sql2 = "select * from review where product_id = $prod_id";
	$sql3 = "insert into view(user_id, product_id, user_name) values ($user_id, $prod_id, '$user_name')";

	$result = $con->query($sql);
	$res = $con->query($sql2);
	$con->query($sql3);

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$product = new stdClass();
                                $product->product_id = $row['pid'];
                                $product->product_name = $row['name'];
                                $product->product_description = $row['pdesc'];
                                $product->product_price = $row['price'];
                                $product->product_image = $row['url'];
                                $product->rating_1 = $row['rating1'];
                                $product->rating_2 = $row['rating2'];
                                $product->rating_3 = $row['rating3'];
				$product->review = array();
				while($r = $res->fetch_assoc()){
					$review = new stdClass();
					$review->id = $r['id'];
					$review->user_id = $r['user_id'];
					$review->user_name = $r['user_name'];
					$review->product_id = $r['product_id'];
					$review->description = $r['description'];
					$review->rating_1 = $r['rating_1'];
					$review->rating_2 = $r['rating_2'];
					$review->rating_3 = $r['rating_3'];
					$review->time = $r['time'];
					array_push($product->review,$review);
				}
		}
	}
	print_r(json_encode($product));
	mysqli_close($con);
?>
