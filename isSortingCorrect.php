<?php

    function getContents($url) {
        // From URL to get webpage contents.
        // $url = "http://jayasuryapinaki.me/actions/getAllProducts.php";

        // Initialize a CURL session.
        $ch = curl_init();

        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $url);

        //$result = curl_exec($ch);

        $testing = file_get_contents($url);


        // var_dump(json_decode($testing, true));

        $response = json_decode($testing, true);

        return $response;
    }


    // $response1 = getContents("http://jayasuryapinaki.me/actions/getAllProducts.php");
    $response2 = getContents("http://codebytes.tech/getTopProducts.php");
    $response3 = getContents("https://codemode.tech/src/getAnalytics.php");
    // $response4 = getContents("http://www.shubhamzingh.tech/products/listAllProducts.php");
    // $response5 = getContents("https://easylabs.tech/marketplace/allProducts.php");

    $allTopFive = array();

    function sortByOrder($a, $b) {
        return  $b['metric']-$a['metric'];
    }

    for ($i=0; $i < 7; $i++) { 
    	// echo $i;
	    $topFive=array_merge($response2[$i], $response3[$i]);

	    usort($topFive, 'sortByOrder');                                                                                                                                                     
	    $newArray = array_slice($topFive, 0, 5, true);
	    $allTopFive[$i] = $newArray;
    }
    // print_r(json_encode($newArray ));
    // echo '<pre>';      
    // print_r($allTopFive);
    // echo '</pre>';   
    echo json_encode($newArray);                                                                                                                                                                             
?>