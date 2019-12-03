<?php
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
    // echo "ASdasd";
    $conn = connectToDatabase();
        $SQLquery = "SELECT A.product_id, A.product_name, A.product_price, A.product_image, A.rating_1, A.rating_2, A.rating_3 
        FROM ( 
            SELECT p.id as product_id, p.name as product_name, p.price as product_price, p.url as product_image, avg(coalesce(r.rating_1,0)) as rating_1, avg(coalesce(r.rating_2,0)) as rating_2, avg(coalesce(r.rating_3,0)) as rating_3 
            FROM product p LEFT JOIN review r  
            on p.id = r.product_id 
            GROUP BY p.id 
        )A LEFT JOIN review R 
        ON A.product_id=R.product_id
        GROUP BY A.product_id;";
    // echo $SQLquery;
    $searchResult = mysqli_query($conn, $SQLquery);
    $myResponse = array();
    while($row = mysqli_fetch_assoc($searchResult))
    {
        array_push($myResponse, $row);
    }
    $myJSON = json_encode($myResponse);
    echo $myJSON;
?>