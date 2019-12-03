<?php
                $servername = "localhost";
                $username = "user1";
                $password = "Db272@123";
                $dbname = "marketplace";
                $con=mysqli_connect($servername, $username, $password, $dbname);
                $sql = "select p.id, name, p.description, price, url, coalesce(avg(rating_1), 0) as rating1, coalesce(avg(rating_2), 0) as rating2, coalesce(avg(rating_3), 0) as rating3 from product p left join review r on p.id = r.product_id group by p.id";
                $result = $con->query($sql);
		$prod_array = array();
                if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
				$product = new stdClass();
				$product->product_id = $row['id'];
                                $product->product_name = $row['name'];
                                $product->product_description = $row['description'];
                                $product->product_price = $row['price'];
                                $product->product_image = $row['url'];
                                $product->rating_1 = $row['rating1'];
                                $product->rating_2 = $row['rating2'];
                                $product->rating_3 = $row['rating3'];
				array_push($prod_array,$product);
                        }
                }
		print_r(json_encode($prod_array));
		mysqli_close($con);
?>

