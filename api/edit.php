<?php
include ("php/dbconn.php");


////THIS IS FOR FORM DATA CODE

if(isset($_GET['book'])){

    $read = "SELECT * FROM booksy_bookList";
    $result = $conn->query($read);
    $dataset = array();

    while($row = $result->fetch_assoc()){

    $postdata = http_build_query(
        array(
            //get names from form covert into array object
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



}




?>

