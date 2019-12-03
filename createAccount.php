
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
            require('./loginNavbar.html');
            require('./loginCheck.php');
        ?>  
        <div class="container-fluid pt-5 pb-5">
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-4 offset-md-4 p-5 shadow">
                        <h4 class="text-center">Create your marketplace account</h4>
                        <form action="./saveAccount.php" method="POST">
                            <div class="form-group">
                                <label for="userEmailID">User Name</label>
                                <input type="text" name="userName" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Password</label>
                                <input type="password" name="userPassword" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control bg-primary text-white" value="Create Account"></input>
                            </div>
                            <div class="panel text-center">
                                <p>or</p>
                                <p>Already have an account? <a href="./login.php">Sign in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <?php
        require('./footer.html')
    ?>
</html>
