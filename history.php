<?php
    $products = $_COOKIE["History_".$_COOKIE['userId']];
    $products = unserialize($products);
    foreach($products as $value){
        echo $value . '<br/>';
    }
?>