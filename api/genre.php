<?php

include ("../php/dbconn.php");
    //Get book categories for main page - finds books on genre 

    //getting table name
    $genre_id = $_GET['genre'];

    $read = "SELECT * FROM booksy_bookList WHERE genre = $genre_id";
    $result = $conn->query($read);
    $dataset = array();

    while($row = $result->fetch_assoc()){
        $bookobject[] = $row;
    }

    echo json_encode($bookobject);

    /*Group books into own genre cat where over 50 for display pages for INDEX MAIN page = 

    SELECT Count(BookID), genre 
    FROM `booksy_bookList`
    GROUP by genre
    HAVING COUNT(bookID) > 50
    LIMIT 12;

*/

?>

