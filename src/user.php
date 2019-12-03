<?php
	session_start();
	include "header.php";
	echo "<div style='background-image:url(../assets/bg.jpg); height: 800px;'>";
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
	<div class='padding-user w-50 mt-5 float-left'>
	<form class="p-2 text-center" action="createuser.php" method="post" style="background-color: #80808080; border-radius: 2rem;">
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">First Name *</label>
			<input type="text" class="mx-auto form-control backpack-font w-50" required placeholder="Enter first name" name="fname"/>
		</div>
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Last Name *</label>
			<input type="text" class="mx-auto form-control backpack-font w-50" required placeholder="Enter last name" name="lname"/>
		</div>
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Email *</label>
			<input type="email" class="mx-auto form-control backpack-font w-50" required placeholder="Enter email address" name="email"/>
		</div>
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Home Address *</label>
			<input type="text" class="mx-auto form-control backpack-font w-50" placeholder="Enter home address" name="home_address"/>
		</div>
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Home Phone *</label>
			<input type="text" maxlength="10" class="mx-auto form-control backpack-font w-50" placeholder="Enter phone number" name="home_phone"/>
		</div>
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Cell Phone *</label>
			<input type="text" maxlength="10" class="mx-auto form-control backpack-font w-50" placeholder="Enter mobile number" name="cell_phone"/>
		</div>
		<?php
			if($_SERVER['QUERY_STRING'] == 'error=true'){
				echo "<div class='p-2 text-danger'>User creation failed. Please try later.</div>";
				$_SERVER['QUERY_STRING'] = '';
			} else if($_SERVER['QUERY_STRING'] == 'success'){
				echo "<div class='p-2 text-success backpack-font-wt'>USER CREATED SUCCESSFULLY!</div>";
				$_SERVER['QUERY_STRING'] = '';
			}
		?>
		<button type="submit" name="submit" class="btn btn-dark backpack-font" value="Submit">Register</button>
	</form>
	</div>

	<div class='padding-user w-50 pr-5 mt-5 float-right'>
	<span class="backpack-font backpack-font-wt">Search by name, email or phone number.</span>
	<form class="form-inline" action="searchuser.php" method="post">
	    <input class="form-control mr-sm-2" type="search" name="input" placeholder="Search" aria-label="Search">
	    <button class="btn btn-success my-2 my-sm-0" name="search" type="submit" value="Submit">Search</button>
	</form>
	<?php
		$servername = "localhost";
		$username = "user1";
		$password = "Db272@123";
		$dbname = "user";

		$con=mysqli_connect($servername, $username, $password, $dbname);
		if(strlen($_SESSION['searchStr']) > 0){
			$str = $_SESSION['searchStr'];
			$sql = "SELECT * FROM user where fname LIKE '%$str%' || lname LIKE '%$str%' || email LIKE '%$str%' || home_phone LIKE '%$str%' || cell_phone LIKE '%$str%';";
			
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "<div class='mt-2 row'><div class='col-sm col-md col-lg col-xl'>"."<label class='backpack-font backpack-font-wt'>Name: </label>" ." ". $row["fname"]. " " . $row["lname"]. "<br>" ."<label class='backpack-font backpack-font-wt'>Email: </label>" ." ". $row["email"]. "<br>" ."<label class='backpack-font backpack-font-wt'>Address: </label>" ." ". $row["home_address"]. "<br>" . "<label class='backpack-font backpack-font-wt'>Home Phone: </label>"." ". $row["home_phone"]. "<br>" . "<label class='backpack-font backpack-font-wt'>Cell Phone: </label>"." ". $row["cell_phone"]. "<br>"."</div></div>";
			    	echo "------------------------------------------------------------";
				}
			} else {
				echo "<div class='p-2 text-danger'>No results found.</div>";
		 		//echo "Error: " . $sql . "<br>" . $con->error;
		 	}	
		 	mysqli_close($con);
		}
	?>
	</div>
</body>
</html>
<?php
	echo "</div>";
	include "footer.php";
	session_unset();
	session_destroy();
?>
