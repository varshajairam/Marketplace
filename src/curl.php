<?php

include "header.php";
echo "<div style='background-image:url(../assets/bg.jpg); height: auto;'>";

echo "<div class='container p-2'><h3>Users of Backpackers United</h3></div>";

include "userlist.php";

echo "<div class='container p-2'><h3>Users of <a href='http://jayasuryapinaki.me/curl.php'>Elementary</a></h3></div>";
  
// From URL to get webpage contents. 
$url = "http://jayasuryapinaki.me/curl.php"; 
  
// Initialize a CURL session. 
$ch = curl_init();  
  
// Return Page contents. 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
//grab URL and pass it to the variable. 
curl_setopt($ch, CURLOPT_URL, $url); 
  
$result = curl_exec($ch); 
  
echo $result;  
echo "</div>";
include "footer.php";
?> 
