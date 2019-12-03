<?php

    // From URL to get webpage contents.
    $url = "http://jayasuryapinaki.me/marketplace/getAllProducts.php";

    // Initialize a CURL session.
    $ch = curl_init();

    // Return Page contents.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //grab URL and pass it to the variable.
    curl_setopt($ch, CURLOPT_URL, $url);

    //$result = curl_exec($ch);

    $testing = file_get_contents($url);


    // var_dump(json_decode($testing, true));

    $response = json_decode($testing, true)
    echo $response;

?>