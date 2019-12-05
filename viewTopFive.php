
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        
        <?php
            require('./navbar.html');
            require('./userCheck.php');
        ?>     
        <div class="container mt-5 pt-5 pb-5" style="min-height: 50vh">

            <div class="row">
                <div class="col-md-5">Company</div>
                <div class="col-md-5">Filter</div>
            </div>

            <form method="GET">
                <div class="row">
                    <div class="col-md-5">
                        <select class="form-control" name="company_id">
                            <option value="1">Elementary</option>
                            <option value="2">Tutorme</option>
                            <option value="3">Backpackers United</option>
                            <option value="4">Shubham</option>
                            <option value="5">Sudhanshu</option>
                            <option value="6">Entire Marketplace</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select class="form-control" name="filter">
                            <option value="1">Top 5 visited</option>
                            <option value="2">Best rated product</option>
                            <option value="3">Top 5 rated (Quality)</option>
                            <option value="4">Top 5 rated (Experience)</option>
                            <option value="5">Top 5 rated (Overall)</option>
                            <option value="6">Top 5 by price (High to low)</option>
                            <option value="7">Top 5 by price (Low to high)</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>


            <?php
                if(array_key_exists("company_id", $_GET) && array_key_exists("filter", $_GET)) {
                    $url;
                    switch ($_GET['company_id']) {
                        case '1':
                            $url = "http://jayasuryapinaki.me/actions/getTopFiveDetails.php";
                            break;

                        case '2':
                            $url = "http://codebytes.tech/getTopProducts.php";
                            break;

                        case '3':
                            $url = "https://codemode.tech/src/getAnalytics.php";
                            break;

                        case '4':
                            // $url = "http://www.shubhamzingh.tech/products/productLevelReview.php";
                            break;

                        case '5':
                            // $url = "https://easylabs.tech/marketplace/perProduct.php";
                            break;
                        
                        case '6':
                            $url = "http://jayasuryapinaki.me/actions/mergeAll.php";
                            break;
                    }
                    // echo $url;

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


                    $data = $response[$_GET['filter'] - 1];
                    // echo ($_GET['filter'] - 1);
                    // echo "<pre>";
                    // echo "CURL call done: " . $url . "<br>";
                    // print_r($data);
                    // echo "</pre>";
                    foreach ($data as $product) {
                        echo '
                            <div class="row mt-3 mb-3 border-bottom">
                                <div class="col-md-3">
                                    <img src="' . $product["product_image"] . '" class="img-fluid">
                                </div>
                                <div class="col-md-9">
                                    <h4>' . $product["product_name"] . '</h4>
                                </div>
                            </div>
                        ';
                    }

                    echo "<pre>";
                    echo "CURL call done: " . $url . "<br>";
                    print_r($response);
                    echo "</pre>";

                }
                
            ?>

        </div>

    </body>
    <?php
        require('./footer.html')
    ?>
</html>
