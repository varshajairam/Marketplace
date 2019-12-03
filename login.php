
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
            <div class="row">
                <div class="col-md-4 offset-md-4 p-5 shadow">
                    <h4 class="text-center">Login</h4>
                    <form action="checkLogin.php" method="POST">
	                    <div class="mt-3">
	                        <div class="form-group">
	                            <label for="userName">User Name</label>
	                            <input type="text" name="userName" class="form-control" required></input>
	                        </div>
	                        <div class="form-group">
	                            <label for="userPassword">Password</label>
	                            <input type="password" name="userPassword" class="form-control" required></input>
	                        </div>
	                        <div class="form-group">
	                            <input type="submit" class="form-control bg-primary text-white" value="Login"></input>
	                        </div>
	                        <div class="panel text-center">
	                            <p>or</p>
	                            <p><a href="./createAccount.php">Create account</a></p>
	                        </div>
	                    </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    <?php
        require('./footer.html')
    ?>
</html>
