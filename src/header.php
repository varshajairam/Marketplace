<!DOCTYPE html>
<html>
	<title>Backpackers United</title>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>		
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/backpack.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="backpack-font backpack-font-wt navbar-brand" href="/src/home.php"><i class="fa fa-map">&nbsp; BACKPACKERS UNITED</i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		     <div class="navbar-nav mr-auto justify-content-center">
		     	<?php
		     		$url = $_SERVER['REQUEST_URI'];
		     		switch($url){
case '/': echo "<a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>					      
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>											     
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>											     
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>									      
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
case '/src/home.php': echo" <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>					      
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>											     
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>											     
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>											      
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/about.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
											         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/about.php'>About</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/services.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/services.php'>Services</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/news.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/news.php'>News</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
											         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font  nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/contacts.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/userlogin.php'>Contacts</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
						case '/src/userlogin.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/userlogin.php'>Contacts</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/userlogin.php?error=true': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
													 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/userlogin.php'>Contacts</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
						case '/src/user.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/user.php'>User</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/user.php?error=true': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/user.php'>User</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
					         case '/src/user.php?success': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
												         <a class='navv-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/user.php'>User</a>
												         <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
													<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
					         break;
						case '/src/services.php?1': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/services.php'>Services</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
                                                                                                <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
                                                 break;
						case '/src/services.php?mostvisited': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current)</span></a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/services.php'>Services</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
                                                                                                <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
												<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/curl.php'>All Users</a>";
                                                 break;
						case '/src/curl.php': echo "<a class='nav-item backpack-font-wt nav-font nav-link' href='/src/home.php'>Home <span class='sr-only'>(current$
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/about.php'>About</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/services.php'>Services</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/news.php'>News</a>
                                                                                                <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/user.php'>User</a>
                                                                                                 <a class='nav-item backpack-font-wt nav-font nav-link' href='/src/userlogin.php'>Contacts</a>
                                                                                                <a class='nav-item backpack-font-wt nav-font nav-link active' href='/src/curl.php'>All Users</a>";
                                                 break;



		     		}
		     	?>
		 	</div>
		   </div>
		</nav>
	</body>
</html>
