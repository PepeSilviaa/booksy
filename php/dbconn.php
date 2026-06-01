<?php
    $pass = $_ENV['DB_PASS'] ?? getenv('DB_PASS');
    $user = $_ENV['DB_USER'] ?? getenv('DB_USER');
    $db = $_ENV['DB_NAME'] ?? getenv('DB_NAME');
    
    $conn = new mysqli($webserver, $user, $pass, $db);
    

    // For Cloud SQL, use Unix socket or IP
    $webserver = "/cloudsql/" . $_ENV['CLOUD_SQL_CONNECTION_NAME'];  // Unix socket (preferred)
    // OR use the Cloud SQL IP directly
    // $webserver = "1.2.3.4";  // Get IP from Cloud SQL instance
    
    $conn = new mysqli($webserver, $user, $pass, $db);
    
    if(!$conn){
        echo $conn -> error;
    }
?>