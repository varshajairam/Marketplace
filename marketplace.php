<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Marketplace</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body>
        
        <?php
            require('./navbar.html');
            require('./userCheck.php');
        ?>     
        <div class="container mt-5 pb-5">

            <h3 class="display-4">Products available</h3>


            <?php
                function displayStars($count) {
                    echo "<h4>";
                    // echo $count;
                    if($count == 0) {
                        echo '<i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>';
                    } else if ($count <= 0.5) {
                        echo '
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 1) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 1.5) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 2) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 2.5) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 3) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 3.5) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 4) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-secondary"></i>
                        ';
                    } else if ($count <= 4.5) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        ';
                    } else if ($count <= 5) {
                        echo '
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        ';
                    }
                    

                    echo "</h4>";
                }

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

                function displayProducts($response, $id) {
                    foreach ($response as $product) {
                        echo '
                            <a href="./viewProduct.php?company=' . $id . '&id=' . $product["product_id"] . '" class="text-dark text-decoration-none">
                                <div class="row mt-3 mb-3 border-bottom">
                                    <div class="col-md-3">
                                        <img src="' . $product["product_image"] . '" class="img-fluid">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>' . $product["product_name"] . '</h4>
                                        <h4 class="font-weight-light">$' . $product["product_price"] . '</h4>';
                        displayStars($product["rating_3"]);
                        echo '
                                    </div>
                                </div>
                            </a>
                        ';
                    }
                }

                // $response1 = getContents("http://jayasuryapinaki.me/actions/getAllProducts.php");
                // $response2 = getContents("http://codebytes.tech/getProducts.php");
                // $response3 = getContents("https://www.codemode.tech/src/getProducts.php");
                // $response4 = getContents("http://www.shubhamzingh.tech/products/listAllProducts.php");
                // $response5 = getContents("https://easylabs.tech/marketplace/allProducts.php");

                // displayProducts($response1, 1);
                // displayProducts($response2, 2);
                // displayProducts($response3, 3);
                // displayProducts($response4, 4);
                // displayProducts($response5, 5);

                // $response = array_merge($response1, $response2, $response3, $response4);
                // echo "<pre>";
                // print_r($response);
                // echo "</pre>";
                switch($_SERVER['QUERY_STRING']){
                    case '1' : $response1 = getContents("http://jayasuryapinaki.me/actions/getAllProducts.php");
                                displayProducts($response1, 1);
                    break;
                    case '2' : $response2 = getContents("http://codebytes.tech/getProducts.php");
                                displayProducts($response2, 2);
                    break;
                    case '3' : $response3 = getContents("https://www.codemode.tech/src/getProducts.php");
                                displayProducts($response3, 3);
                    break;
                    case '4' : $response4 = getContents("http://www.shubhamzingh.tech/products/listAllProducts.php");
                                displayProducts($response4, 4);
                    break;
                    case '5' : $response5 = getContents("https://easylabs.tech/marketplace/allProducts.php");
                                displayProducts($response5, 5);
                    break;
                }

            ?>
            
        </div>

    </body>
    <?php
        require('./footer.html')
    ?>
</html>
