<?php
	include "header.php";
	echo "<div style='background-image:url(../assets/bg.jpg); height: 800px;'>";
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
	<div class='w-50 mx-auto pt-5 d-flex flex-column'>
	<form class="p-2 text-center" action="loginauth.php" method="post" style="background-color: #80808080; border-radius: 2rem;">
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Username</label>
			<input type="text" class="mx-auto form-control backpack-font w-50" placeholder="Enter username" name="username"/>
		</div>
		<div class="form-group">
			<label class="backpack-font backpack-font-wt">Password</label>
			<input type="password" class="mx-auto form-control backpack-font w-50" placeholder="Enter password" name="pwd"/>
		</div>
		<?php
			if($_SERVER['QUERY_STRING'] == 'error=true'){
				echo "<div class='p-2 text-danger backpack-font-wt'>Invalid username or password. Please try again.</div>";
				$_SERVER['QUERY_STRING'] = '';
			}
		?>
		<button type="submit" name="submit" class="btn btn-dark backpack-font mb-2" value="Submit">Submit</button>
	</form>
	</div>
</body>
</html>
<?php
	echo "</div>";
	include "footer.php";
?>
