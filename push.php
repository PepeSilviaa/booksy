<?php
include ("php/dbconn.php");
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>post to API </h1>

    <?php

    $read = "SELECT * FROM booksy_bookList";
    $result = $conn->query($read);

    while($row = $result->fetch_assoc()){

    $postdata = http_build_query(
        array(
        $bookid => $row["bookID"],
        $author => $row["author"],
        $title  => $row["title"],
        $description => $row["descript"],
        $isbn => $row["isbn"],
        $pages => $row["pages"],
        $rating => $row["rating"],
        $reviews => $row["reviewsTotal"],
        $image => $row["bookCover"],
        $genre => $row["genre"]

        )
    );


    $endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/admin/";

    $opts = array(
        'http' => array(
            'method' => 'GET', //can use GET
            'header' => 'Content-Type: application/x-www-form-urlencoded',
            'content' =>  $postdata
         )
    );

    $context = stream_context_create($opts);

    $result2 = file_get_contents($endpoint, false, $context);

    echo $result2;

};



?>


</body>
</html>