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

    $SQLquery = "INSERT INTO review (user_id, user_name, product_id, description, rating_1, rating_2, rating_3) VALUES (" . $_POST['user_id'] . ", \"" . $_POST['user_name'] . "\", " . $_POST['product_id'] . ", \"" . $_POST['description'] . "\", " . $_POST['rating_1'] . ", " . $_POST['rating_2'] . ", " . $_POST['rating_3'] . ");";
    echo $_POST;
    $productData = mysqli_query($conn, $SQLquery);
?>