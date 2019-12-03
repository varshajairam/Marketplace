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
    $SQLquery = "SELECT A.product_id, A.product_name, A.product_description, A.product_price, A.product_image, A.rating_1, A.rating_2, A.rating_3 
    FROM ( 
        SELECT p.id as product_id, p.name as product_name,p.description as product_description, p.price as product_price, p.url as product_image, avg(coalesce(r.rating_1,0)) as rating_1, avg(coalesce(r.rating_2,0)) as rating_2, avg(coalesce(r.rating_3,0)) as rating_3 
        FROM product p LEFT JOIN review r  
        on p.id = r.product_id
        WHERE p.id = " . $_GET['product_id'] . "
        GROUP BY p.id ,p.name,p.price 
    )A LEFT JOIN review R 
    ON A.product_id=R.product_id;";
    $productData = mysqli_query($conn, $SQLquery);
    $productDataArr = array();
    while($row = mysqli_fetch_assoc($productData))
    {
        $productDataArr = $row;
    }


    $SQLquery = "SELECT * FROM review WHERE product_id = " . $_GET['product_id'] . ";";
    $reviewResult = mysqli_query($conn, $SQLquery);
    $reviewResultArr = array();
    while($row = mysqli_fetch_assoc($reviewResult))
    {
        array_push($reviewResultArr, $row);
    }


    $SQLquery = "INSERT INTO view (user_id, user_name, product_id) VALUES (" . $_GET['user_id'] . ", \"" . $_GET['user_name'] . "\", " . $_GET['product_id'] . ") ;";
    $reviewResult = mysqli_query($conn, $SQLquery);

    $productDataArr['review'] = $reviewResultArr;
    $myJSON = json_encode($productDataArr);


    echo $myJSON;
    // echo $_GET;
?>