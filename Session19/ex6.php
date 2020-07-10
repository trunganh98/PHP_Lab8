<?php
    $cookie_name = $_COOKIE['cname'];
    setcookie("$cookie_name", "", time()-8000)
?>