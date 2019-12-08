<?php
setcookie('History_'.$_COOKIE['userId'], serialize(array()), time() + (10 * 365 * 24 * 60 * 60));
?>
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
                    case '1':
                        url = "http://jayasuryapinaki.me/actions/saveReview.php";
                        break;
                    case '2':
                        url = "http://codebytes.tech/insertReview.php";
                        break;
                    case '3':
                        url = "https://codemode.tech/src/postReview.php";
                        break;
                    case '4':
                        url = "";
                        break;
                    case '5':
                        url = "https://easylabs.tech/marketplace/storeReview.php";
                        break;
                    // default:
                    //     $url = "http://jayasuryapinaki.me/actions/getSingleProduct.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                    //     break;
                }
                $.post(url,
                {
                  user_id: document.getElementById('user_id').value,
                  user_name: document.getElementById('user_name').value,
                  product_id: document.getElementById('product_id').value,
                  description: document.getElementById('description').value,
                  rating_1: document.getElementById('rating_1').value,
                  rating_2: document.getElementById('rating_2').value,
                  rating_3: document.getElementById('rating_3').value
                },
                function(data,status){
                  console.log("Data: " + data + "\nStatus: " + status);
                  alert("Post data sent: \n" + data);
                });
              });
            });
        </script>
    </head>
    <body>
        
        <?php
//            require('./navbar.html');
  //          require('./userCheck.php');
        ?>     
        <div class="container mt-5 pt-5 pb-5">

            <!-- <h3><a href="../">Home ></a> <a href="../product.php">Products/ Services ></a> Quizzes</h3> -->
            <?php
                function displayStars($count) {
                    echo "<h3>";
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
                    
                    echo "</h3>";
                }
                function displaySmiley($count) {
                    if ($count <= 1) {
                        return '<i class="far fa-sad-cry text-danger"></i>';
                    } else if ($count <= 2) {
                        return '<i class="far fa-frown text-danger"></i>';
                    } else if ($count <= 3) {
                        return '<i class="far fa-smile-beam text-warning"></i>';
                    } else if ($count <= 4) {
                        return '<i class="far fa-grin-beam text-success"></i>';
                    } else if ($count <= 5) {
                        return '<i class="far fa-grin-hearts text-success"></i>';
                    }
                }
                $url = "";
                // From URL to get webpage contents.
                switch ($_GET['company']) {
                    case '1':
                        $url = "http://jayasuryapinaki.me/actions/getSingleProduct.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                        break;
                    case '2':
                        $url = "http://codebytes.tech/getProducts.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                        break;
                    case '3':
                        $url = "https://codemode.tech/src/getProductDetail.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                        break;
                    case '4':
                        $url = "http://www.shubhamzingh.tech/products/productLevelReview.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                        break;
                    case '5':
                        $url = "https://easylabs.tech/marketplace/perProduct.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                        break;
                    
                    // default:
                    //     $url = "http://jayasuryapinaki.me/actions/getSingleProduct.php?product_id=" . $_GET['id'] . "&user_id=" . $_COOKIE['userId'] . "&user_name=" . $_COOKIE['userName'];
                    //     break;
                }
                // Initialize a CURL session.
                $ch = curl_init();
                // Return Page contents.
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$ex = "http://jayasuryapinaki.me/marketplace/viewProduct.php?company=1&id=2";
                //grab URL and pass it to the variable.
                curl_setopt($ch, CURLOPT_URL, $ex);
                //$result = curl_exec($ch);
                $testing = file_get_contents($ex);
                // var_dump(json_decode($testing, true));
                $response = json_decode($testing, true);

		$cookie_name = "History_".$_COOKIE['userId']; 
		if(!isset($_COOKIE[$cookie_name])) { 
                  $cookie_value = array(); 
                  $cookie_value = array_push($cookie_value, 'xyz'); 
                  setcookie($cookie_name, serialize($cookie_value), time() + (10 * 365 * 24 * 60 * 60));
                } else {
		  $cookie_value = unserialize($_COOKIE[$cookie_name]);
	       	  array_push($cookie_value, $response['product_name']); 
                  setcookie($cookie_name, serialize($cookie_value), time() + (10 * 365 * 24 * 60 * 60));
                }
                echo "<pre>";
                echo "CURL call done: " . $ex . "<br>";
                print_r($response);
                echo "</pre>";
                echo '
            <div class="mt-5 mb-5 text-center">
                <h3 class="display-4">' . $response['product_name'] . '</h3>
                <!-- <img src="../../resources/product/quizzes.png" class="img-fluid"> -->
                <img src="' . $response['product_image'] . '" class="img-fluid">
            </div>';
            echo '
            <h3 class="font-weight-light mb-5 text-justify">' . $response['product_description'] . '</h3>
            <h3>Cost: $' . $response['product_price'] . '</h3>
            ';
            ?>
            <div class="WriteReview pt-4">
                <!-- <form action="http://jayasuryapinaki.me/actions/saveReview.php" method="POST"> -->
                    <?php
                    echo '
                        <input type="text" id="company_id" class="form-control" style="display: none" value="' . $_GET["company"] . '">
                        <input type="text" id="user_id" class="form-control" style="display: none" value="' . $_COOKIE["userId"] . '">
                        <input type="text" id="user_name" class="form-control" style="display: none" value="' . $_COOKIE["userName"] . '">                    
                        <input type="text" id="product_id" class="form-control" style="display: none" value=' . $_GET["id"] . '>';
                    ?>
                    <textarea rows="4" style="width: 100%; resize: none;" placeholder="Write a review" id="description"></textarea>
                    <div class="row mb-2">
                        <div class="col-md-4 text-center">
                            <h4>Quality</h4>
                            <select class="custom-select" id="rating_1">
                                <option value="5">5</option>
                                <option value="4.5">4.5</option>
                                <option value="4">4</option>
                                <option value="3.5">3.5</option>
                                <option value="3">3</option>
                                <option value="2.5">2.5</option>
                                <option value="2">2</option>
                                <option value="1.5">1.5</option>
                                <option value="1">1</option>
                                <option value="0.5">0.5</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>Experience</h4>
                            <select class="custom-select" id="rating_2">
                                <option value="5">5</option>
                                <option value="4.5">4.5</option>
                                <option value="4">4</option>
                                <option value="3.5">3.5</option>
                                <option value="3">3</option>
                                <option value="2.5">2.5</option>
                                <option value="2">2</option>
                                <option value="1.5">1.5</option>
                                <option value="1">1</option>
                                <option value="0.5">0.5</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                        <div class="col-md-4 text-center">
                            <h4>Overall</h4>
                            <select class="custom-select" id="rating_3">
                                <option value="5">5</option>
                                <option value="4.5">4.5</option>
                                <option value="4">4</option>
                                <option value="3.5">3.5</option>
                                <option value="3">3</option>
                                <option value="2.5">2.5</option>
                                <option value="2">2</option>
                                <option value="1.5">1.5</option>
                                <option value="1">1</option>
                                <option value="0.5">0.5</option>
                                <option value="0">0</option>
                            </select>
                        </div>
                    </div>

<!--                     <div class="row">                    
                        <div class="col-md-2">Quality</div>
                        <div class="col-md-4">
                            <h3>
                                <i class="far fa-grin-hearts"></i>
                                <i class="far fa-grin-beam"></i>
                                <i class="far fa-smile-beam"></i>
                                <i class="far fa-frown"></i>
                                <i class="far fa-sad-cry"></i>
                            </h3>
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col-md-2">Experience</div>
                        <div class="col-md-4">
                            <h3>
                                <i class="far fa-grin-hearts"></i>
                                <i class="far fa-grin-beam"></i>
                                <i class="far fa-smile-beam"></i>
                                <i class="far fa-frown"></i>
                                <i class="far fa-sad-cry"></i>
                            </h3>
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col-md-2">Overall</div>
                        <div class="col-md-4">
                            <h3>
                                <i class="far fa-grin-hearts"></i>
                                <i class="far fa-grin-beam"></i>
                                <i class="far fa-smile-beam"></i>
                                <i class="far fa-frown"></i>
                                <i class="far fa-sad-cry"></i>
                            </h3>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-md-2 offset-md-10">
                            <button class="btn btn-primary w-100">Submit</button>
                        </div>
                    </div>
                <!-- </form> -->
            </div>
            <div id="ProductRatings">
                <h3>Product ratings</h3>

                <div class="row">
                    <div class="col-md-2">Quality</div>
                    <div class="col-md-4"><?php displayStars($response['rating_1']) ?> </div>
                </div>

                <div class="row">
                    <div class="col-md-2">Experience</div>
                    <div class="col-md-4"><?php displayStars($response['rating_2']) ?> </div>
                </div>

                <div class="row">
                    <div class="col-md-2">Overall</div>
                    <div class="col-md-4"><?php displayStars($response['rating_3']) ?> </div>
                </div>

            </div>
            <div>
                <h3 class="border-bottom">Reviews</h3>
                <?php
                foreach ($response['review'] as $review) {
                    echo '
                    <div class="row mt-2 mb-2 border-bottom">
                        <div class="col-md-3 font-weight-bold">
                            <h5>
                                <span>' . $review['user_name'] . ' - </span> ' . displaySmiley($review['rating_3']) . '
                            </h5>
                        </div>
                        <div class="col-md-12"> <p>' . $review['description'] . '</p> </div>
                    </div>
                    ';
                }
                ?>

            </div>

        </div>

    </body>
    <?php
        require('./footer.html')
    ?>
</html>
