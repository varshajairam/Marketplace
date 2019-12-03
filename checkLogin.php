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

    $SQLquery = "SELECT * FROM user WHERE name = \"" . $_POST['userName'] . "\" and password = \"" . sha1($_POST['userPassword']) . "\";";
    echo $SQLquery;
    $userData = mysqli_query($conn, $SQLquery);
    if (mysqli_num_rows($userData) > 0) {
        while($row = mysqli_fetch_assoc($userData))
        {
            print_r($row);
            setcookie("userName", $row['name'], (10 * 365 * 24 * 60 * 1000), "/");
            setcookie("userId", $row['id'], (10 * 365 * 24 * 60 * 1000), "/");
        }
        header("Location: ./marketplace.php");
    } else {
        header("Location: ./login.php");
    }
?>