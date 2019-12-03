<?php

if($_SERVER['QUERY_STRING'] == '1'){
  $cname1 = "service1";
  if(!isset($_COOKIE[$cname1])) {    
    $cvalue1 = 1;
  	setcookie($cname1, $cvalue1, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue1 = ++$_COOKIE[$cname1];
    setcookie($cname1, $cvalue1, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Quicksilver Trail</h5>
    <p class='card-text'>Peaceful, scenic and well-maintained trail. Great for moderate to skilled hikers.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';
} 
else if($_SERVER['QUERY_STRING'] == '2'){
  $cname2 = "service2";
  if(!isset($_COOKIE[$cname2])) {    
    $cvalue2 = 1;
    setcookie($cname2, $cvalue2, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue2 = ++$_COOKIE[$cname2];
    setcookie($cname2, $cvalue2, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg2.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Artist Point</h5>
    <p class='card-text'>A 2-mile hike with wonderful views, this one lives up to its name. Perfect for beginners.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';
}
else if($_SERVER['QUERY_STRING'] == '3'){
  $cname3 = "service3";  
  if(!isset($_COOKIE[$cname3])) {    
    $cvalue3 = 1;
    setcookie($cname3, $cvalue3, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue3 = ++$_COOKIE[$cname3];
    setcookie($cname3, $cvalue3, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg3.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Upper Yosemite Falls</h5>
    <p class='card-text'>A 7-mile hike, with quite a steep climb. Recommended for those with prior experience.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';
}
else if($_SERVER['QUERY_STRING'] == '4'){
  $cname4 = "service4";
  if(!isset($_COOKIE[$cname4])) {    
    $cvalue4 = 1;
    setcookie($cname4, $cvalue4, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue4 = ++$_COOKIE[$cname4];
    setcookie($cname4, $cvalue4, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-4'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg4.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>The Mist Trail</h5>
    <p class='card-text'>A 3-mile trail with rewarding views of multiple waterfalls. Early mornings work best to catch the falls at good flow.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';

} else if($_SERVER['QUERY_STRING'] == '5'){
  $cname5 = "service5";
  
  if(!isset($_COOKIE[$cname5])) {    
    $cvalue5 = 1;
    setcookie($cname5, $cvalue5, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue5 = ++$_COOKIE[$cname5];
    setcookie($cname5, $cvalue5, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg5.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Mission Peak</h5>
    <p class='card-text'>Always a crowd favorite, this is a 6 mile hike that can get quite strenuous. It can be attempted all year round.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';

} else if($_SERVER['QUERY_STRING'] == '6'){
  $cname6 = "service6";
  
  if(!isset($_COOKIE[$cname6])) {    
    $cvalue6 = 1;
    setcookie($cname6, $cvalue6, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue6 = ++$_COOKIE[$cname6];
    setcookie($cname6, $cvalue6, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Coyote Peak and Ridge Trail</h5>
    <p class='card-text'>Coyote Peak and Ridge Trail Loop is a 3.8 mile heavily trafficked loop trail located near San Jose, California that features beautiful wild flowers and is rated as moderate. The trail offers a number of activity options and is accessible year-round.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';

} else if($_SERVER['QUERY_STRING'] == '7'){
  $cname7 = "service7";
  if(!isset($_COOKIE[$cname7])) {    
    $cvalue7 = 1;
    setcookie($cname7, $cvalue7, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue7 = ++$_COOKIE[$cname7];
    setcookie($cname7, $cvalue7, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Santa Teresa Country Park Trail</h5>
    <p class='card-text'>Peaceful, scenic and well-maintained trail. Great for moderate to skilled hikers.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';

} else if($_SERVER['QUERY_STRING'] == '8'){
  $cname8 = "service8";
  if(!isset($_COOKIE[$cname8])) {    
    $cvalue8 = 1;
    setcookie($cname8, $cvalue8, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue8 = ++$_COOKIE[$cname8];
    setcookie($cname8, $cvalue8, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Penitencia Creek Trail</h5>
    <p class='card-text'>Penitencia Creek Trail is a 3.5 mile moderately trafficked out and back trail located near San Jose, California that features a lake and is good for all skill levels. The trail offers a number of activity options and is accessible year-round.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';

} else if($_SERVER['QUERY_STRING'] == '9'){
  $cname9 = "service9";
  if(!isset($_COOKIE[$cname9])) {    
    $cvalue9 = 1;
    setcookie($cname9, $cvalue9, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue9 = ++$_COOKIE[$cname9];
    setcookie($cname9, $cvalue9, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>Guadalupe and Mine Hill Loop</h5>
    <p class='card-text'>Peaceful, scenic and well-maintained trail. Great for moderate to skilled hikers.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';

} else if($_SERVER['QUERY_STRING'] == '10'){
  $cname10 = "service10";
  if(!isset($_COOKIE[$cname10])) {    
    $cvalue10 = 1;
    setcookie($cname10, $cvalue10, time() + (10 * 365 * 24 * 60 * 60));
  } else {
    $cvalue10 = ++$_COOKIE[$cname10];
    setcookie($cname10, $cvalue10, time() + (10 * 365 * 24 * 60 * 60));
  }
  include 'header.php';
  
  echo "
  <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>  
<div class='col-sm col-md col-lg col-xl'>
      <div class='card text-white bg-dark' style='width: 18rem;'>
  <img src='../assets/Simg1.jpg' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='backpack-font card-title'>New Almaden Trail</h5>
    <p class='card-text'>Peaceful, scenic and well-maintained trail. Great for moderate to skilled hikers.</p>
    <a href='#' class='btn btn-light'><i class='fa fa-heart'></i>&nbsp;Interested</a>
  </div>
</div>
    </div>
    </div>
    </div>
    ";
  include 'footer.php';
} 
else if($_SERVER['QUERY_STRING'] == 'mostvisited'){
  include 'header.php';
  echo "
   <div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>
  <div class='display-4 backpack-font'>OUR MOST POPULAR HIKES</div>  
  ";
   $stats = 
  array(
    array("name"=>"Quicksilver Trail", "count"=>$_COOKIE["service1"]),
   array("name"=>"Artist Point", "count"=>$_COOKIE["service2"]),
   array("name"=>"Upper Yosemite Falls", "count"=>$_COOKIE["service3"]),
   array("name"=>"The Mist Trail", "count"=>$_COOKIE["service4"]),
   array("name"=>"Mission Peak", "count"=>$_COOKIE["service5"]),
   array("name"=>"Coyote Peak and Ridge Trail", "count"=>$_COOKIE["service6"]),
   array("name"=>"Santa Teresa Country Park Trail", "count"=>$_COOKIE["service7"]),
   array("name"=>"Penitencia Creek Trail", "count"=>$_COOKIE["service8"]),
   array("name"=>"Guadalupe and Mine Hill Loop", "count"=>$_COOKIE["service9"]),
   array("name"=>"New Almaden Trail", "count"=>$_COOKIE["service10"])
  );
  sort($stats);
  $count = array_column($stats, 'count');

  array_multisort($count, SORT_DESC, $stats);
  for($x = 0; $x <= 4; $x++) {
      echo $stats[$x]["name"];
      echo "<br>";
  }
  echo " </div>
    </div>";
    include 'footer.php';
} else {
  include 'header.php';

  echo "<div style='background-image:url(../assets/bg.jpg); height: 800px;'>
  <div class='container pt-5 overflow-auto'>
  <span class='display-4 backpack-font'>PICK YOUR TRAIL</span>

  <a class='float-right' href='/src/services.php?mostvisited'>Most popular services</a>
  <div>
  <a href='/src/services.php?1'>Quicksilver Trail</a></br>
  <a href='/src/services.php?2'>Artist Point</a></br>
  <a href='/src/services.php?3'>Upper Yosemite Falls</a></br>
  <a href='/src/services.php?4'>The Mist Trail</a></br>
  <a href='/src/services.php?5'>Mission Peak</a></br>
  <a href='/src/services.php?6'>Coyote Peak and Ridge Trail</a></br>
  <a href='/src/services.php?7'>Santa Teresa Country Park Trail</a></br>
  <a href='/src/services.php?8'>Penitencia Creek Trail</a></br>
  <a href='/src/services.php?9'>Guadalupe and Mine Hill Loop</a></br>
  <a href='/src/services.php?10'>New Almaden Trail</a>
  </div>

  </div>
  </div>";
  include 'footer.php';
} 



?>
