<?php
$val = unserialize($_COOKIE['History_'.$_COOKIE['userId']);
foreach($val as $value){
echo $value;
}
?>
