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

    print_r($_POST);
    $SQLquery = "INSERT INTO user (name, password) VALUES (\"" . $_POST['userName'] . "\", \"" . sha1($_POST['userPassword']) . "\");";
    echo $SQLquery;
    $productData = mysqli_query($conn, $SQLquery);
    header("Location: ./login.php");
?>