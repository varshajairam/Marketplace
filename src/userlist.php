<?php
//	echo "<div style='background-image:url(../assets/bg.jpg); height: auto;'>";
	echo "<div class='container'>";
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
		$servername = "localhost";
		$username = "user1";
		$password = "Db272@123";
		$dbname = "user";

		$con=mysqli_connect($servername, $username, $password, $dbname);
			$sql = "SELECT * FROM user";			
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			        echo "<div class='mt-2 row'><div class='col-sm col-md col-lg col-xl'>"."<label class='backpack-font backpack-font-wt'>Name: </label>" ." ". $row["fname"]. " " . $row["lname"]. "<br>" ."<label class='backpack-font backpack-font-wt'>Email: </label>" ." ". $row["email"]. "<br>" ."<label class='backpack-font backpack-font-wt'>Address: </label>" ." ". $row["home_address"]. "<br>" . "<label class='backpack-font backpack-font-wt'>Home Phone: </label>"." ". $row["home_phone"]. "<br>" . "<label class='backpack-font backpack-font-wt'>Cell Phone: </label>"." ". $row["cell_phone"]. "<br>"."</div></div>";
			    	echo "------------------------------------------------------------";
				}
			} else {
				echo "<div class='p-2 text-danger'>No results found.</div>";
		 	}
		 	mysqli_close($con);
?>
</body>
</html>
<?php
echo "</div></div>";
?>
