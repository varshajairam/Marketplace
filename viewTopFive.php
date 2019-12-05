
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
        <script>
            $(document).ready(function(){
              $("button").click(function(){
                var url = "";
                switch (document.getElementById('company_id').value) {
                    // case '1':
                    //     url = "http://jayasuryapinaki.me/actions/saveReview.php";
                    //     break;
                    // case '2':
                    //     url = "http://codebytes.tech/insertReview.php";
                    //     break;
                    case '3':
                        url = "https://codemode.tech/src/getAnalytics.php";
                        break;
                    
                    // default:
                    //     $url = "http://jayasuryapinaki.me/actions/getSingleProduct.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                    //     break;
                }
                
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
                echo "<pre>";
                echo "CURL call done: " . $url . "<br>";
                print_r($response);
                echo "</pre>";

              });
            });
        </script>
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
                            <option value="2">Top 5 rated (Overall)</option>
                            <option value="3">Top 5 prices</option>
                            <option value="4">Bottom 5 prices</option>
                            <option value="5">Recently visited</option>
                            <option value="5">Best rated product</option>
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
                            $url = "http://jayasuryapinaki.me/actions/getSingleProduct.php";
                            break;
                        case '2':
                            $url = "http://codebytes.tech/getTopProducts.php";
                            break;
                        case '3':
                            $url = "https://codemode.tech/src/getAnalytics.php";
                            break;
                        case '4':
                            $url = "http://www.shubhamzingh.tech/products/productLevelReview.php";
                            break;
                        case '5':
                            $url = "https://easylabs.tech/marketplace/perProduct.php";
                            break;
                        
                        default:
                            $url = "Marketplace";
                            break;
                    }
                    echo $url;

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
