<?php
    setcookie("userName", "", time() - 3600, "/");
    setcookie("userId", "", time() - 3600, "/");
    header("Location: ./login.php");
?>