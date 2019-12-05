	<?php
	// require "dbConnect.php";
	function connectToDatabase() {
		$servername = "localhost";
		$username = "jayasurya";
		$password = "272password";
		$database = "marketplace";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);

		// Check connection
		if (mysqli_connect_errno()) {
			die("Connection failed: " . mysqli_connect_error());
		}
		// echo "Connected successfully";
	return $conn;
	}

	$conn = connectToDatabase();

	$topFive=array();


	//top 5 visited
	$topFiveVisited = array();	
	$sql = "select id as product_id, name as product_name, url as product_image, count(*) as metric
	from view v left join product p on v.product_id = p.id group by product_id order by metric
	desc limit 5";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$topFiveVisited[] = $row;
		}
	}
	//print_r(json_encode($topFiveVisited));
	$topFive[0]=$topFiveVisited;


	//top rated product	
	$topRatedProduct = array();		
	$sql = "select product_id,product_name,product_image,max(rating_3)as metric from 
			(select product_id,name as product_name,url as product_image, TRUNCATE(avg(rating_3),1) as rating_3 
			from review R, product S where R.product_id=S.id group by product_id)A";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$topRatedProduct[] = $row;
		}
	}

	//print_r(json_encode($topRatedProduct));
	$topFive[1]=$topRatedProduct;




	//top rated 5 products rating_1
	$toprating_1 = array();	
	$sql = "select product_id,name as product_name,url as product_image, TRUNCATE(avg(rating_1),1) as metric
	from review R, product S where R.product_id=S.id group by product_id order by metric
	desc limit 5";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$toprating_1[] = $row;
		}
	}

	//print_r(json_encode($toprating_1));

	$topFive[2]=$toprating_1;



	//top rated 5 products rating_2	
	$toprating_2 = array();	
	$sql = "select product_id,name as product_name,url as product_image, TRUNCATE(avg(rating_2),1) as metric
	from review R, product S where R.product_id=S.id group by product_id order by metric
	desc limit 5";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$toprating_2[] = $row;
		}
	}


	//print_r(json_encode($toprating_2));
	$topFive[3]=$toprating_2;



	//top rated 5 products rating_3
	$toprating_3 = array();		
	$sql = "select product_id,name as product_name,url as product_image, TRUNCATE(avg(rating_3),1) as metric
	from review R, product S where R.product_id=S.id group by product_id order by metric
	desc limit 5";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$toprating_3[] = $row;
		}
	}

	//print_r(json_encode($toprating_3));
	$topFive[4]=$toprating_3;



	//top 5 by price
	$topPrice = array();	
	$sql = "select id as product_id,service_name as product_name,image as product_image,price as metric
	from services order by metric desc limit 5";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$topPrice[] = $row;		
		}
	}

	//print_r(json_encode($topPrice));
	$topFive[5]=$topPrice;

	//bottom 5 by price	
	$bottomPrice = array();	
	$sql = "select id as product_id,name as product_name,url as product_image,price as metric
	from product order by metric limit 5 ";
	$result = $conn->query($sql);


	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			$bottomPrice[] = $row;	
		}
	}

	//print_r(json_encode($bottomPrice));
	$topFive[6]=$bottomPrice;

	echo json_encode($topFive);
?>