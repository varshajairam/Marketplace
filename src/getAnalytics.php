<?php
	$servername = "localhost";
	$username = "user1";
	$password = "Db272@123";
	$dbname = "marketplace";

	$con=mysqli_connect($servername, $username, $password, $dbname);
	$sql1 = "select product_id, name as product_name, url as product_image, count(*) as count from view v left join product p on v.product_id = p.id group by product_id order by count desc limit 5";
	$sql2 = "select pid, product_name, product_image, max(rating3) from (select p.id as pid, name as product_name, url as product_image, TRUNCATE(avg(rating_3),1) as rating3 from review r join product p on r.product_id = p.id group by pid)A";
	$sql3 = "select name as product_name, url as product_image, TRUNCATE(avg(rating_1),1) as rating1 from review r join product p on r.product_id = p.id group by product_id order by rating1 desc limit 5";
	$sql4 = "select name as product_name, url as product_image, TRUNCATE(avg(rating_2),1) as rating2 from review r join product p on r.product_id = p.id group by product_id order by rating2 desc limit 5";
	$sql5 = "select name as product_name, url as product_image, TRUNCATE(avg(rating_3),1) as rating3 from review r join product p on r.product_id = p.id group by product_id order by rating3 desc limit 5";
	$sql6 = "select name as product_name, url as product_image, price from product order by price desc limit 5";
	$sql7 = "select name as product_name, url as product_image, price from product order by price limit 5";
	$res1 = $con->query($sql1);
	$res2 = $con->query($sql2);
	$res3 = $con->query($sql3);
	$res4 = $con->query($sql4);
	$res5 = $con->query($sql5);
	$res6 = $con->query($sql6);
	$res7 = $con->query($sql7);

	if($res1->num_rows > 0){
		while($row = $res1->fetch_assoc()){
			$view1[] = $row;
		}
	}
	if($res2->num_rows > 0){
               while($row = $res2->fetch_assoc()){
                        $view2[] = $row;
                }
        }
	if($res3->num_rows > 0){
                while($row = $res3->fetch_assoc()){
                        $view3[] = $row;
                }
        }
	if($res4->num_rows > 0){
                while($row = $res4->fetch_assoc()){
                        $view4[] = $row;
                }
        }
	if($res5->num_rows > 0){
                while($row = $res5->fetch_assoc()){
                        $view5[] = $row;
                }
        }
	if($res6->num_rows > 0){
                while($row = $res6->fetch_assoc()){
                        $view6[] = $row;
                }
        }
	if($res7->num_rows > 0){
                while($row = $res7->fetch_assoc()){
                        $view7[] = $row;
                }
        }
	$view = array();
	array_push($view, $view1, $view2, $view3, $view4, $view5, $view6, $view7);
	print_r(json_encode($view));
	//print_r(json_encode($view2));
	//print_r(json_encode($view3));
	//print_r(json_encode($view4));
	//print_r(json_encode($view5));
	//print_r(json_encode($view6));
	//print_r(json_encode($view7));

	mysqli_close($con);
?>
