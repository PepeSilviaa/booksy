
<?php

    //get a book object by ID
    $genre_name = $_GET['genreName'];
    $limit = $_GET['limit'];

    function topbooks($name, $num){

        header('Content-type: application/json');

        include ("../php/dbconn.php");

        $read = "SELECT * FROM `booksy_bookList` INNER JOIN booksy_genreList ON booksy_bookList.genre = booksy_genreList.genreID WHERE genreName = '$name' ORDER BY booksy_bookList.rating DESC LIMIT $num";

        $result = $conn->query($read);
  
        while($row = $result->fetch_assoc()){
            $topgenre[] = $row;
        }
        echo json_encode($topgenre);
    }


    topbooks($genre_name, $limit);

   
?>













