<?php


if(!isset($_SERVER['PHP_AUTH_USER'])){
    header("WWW-Authenticate: Basic realm = \'PrivateUser\'");
    header("HTTP/1.0 401 Unauthorized");
    echo "You need to enter a valid username and Password";
}


?>
