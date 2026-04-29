
<?php

include("dbconn.php");

function addbooks($line){
    //sort out file remove
    //duplicates and things 

    include("dbconn.php");

    $author = $line[0];
    $descrip = $line[1];
    $isbn = $line[2];
    $pages = $line[3];
    $rating = $line[4];
    $reviews = $line[5];
    $title = $line[6];
    $genre = explode("|", $line[7]);
    $singleGenre = $genre[0];
    $url = $line[8];


    $descripinject = $conn->real_escape_string($descrip);
    $titleinject = $conn->real_escape_string($title);
    $genreinject = $conn->real_escape_string($singleGenre);


    $sql = "INSERT INTO booksy_bookList (author, descript, isbn, pages, rating, reviewsTotal, title, bookCover, genre) 
            VALUES ('$author', '$descripinject', '$isbn', '$pages', '$rating', '$reviews', '$titleinject', '$url', '$genreinject')";

    //echo "<p>$sql</p>";
    //$insert = $conn -> query($sql);
   
    }   



function sortingDiffGenre(){

    include("dbconn.php");
    $sqlsort = "INSERT INTO booksy_genreList (genreName) SELECT DISTINCT genre FROM booksy_bookList";
    $result4 = $conn -> query($sqlsort);

}



function addingGenreKey ($genres){
        
    include("dbconn.php");

      //changing the genre name to ID of genre list 
      $sql2 = "SELECT * FROM booksy_genreList WHERE genreName = '$genres'";
   
      $result = $conn->query($sql2);   
      //print_r($sql2);

      //echo "<p>$sql1</p>";

      while($row = $result->fetch_assoc() ){

        $id = $row['genreID'];
        $name = $row['genreName'];
        
        $sql3 = "UPDATE booksy_bookList SET genre = '$id' WHERE genre = '$name'";
        echo "<p> $sql3</p>";
        //print_r($sql3);
        $updateID = $conn->query($sql3);  
    }
  
}

$file = fopen("../sql/book_data.csv", "r");

    //creates an index array of that row 
    while (($line = fgetcsv($file, ",")) !== FALSE) {

        $author = $line[0];
        $descrip = $line[1];
        $isbn = $line[2];
        $pages = $line[3];
        $rating = $line[4];
        $reviews = $line[5];
        $title = $line[6];
        $genre = explode("|", $line[7]);
        $url = $line[8];

        $singleGenre = $genre[0];
        $genreInject = $conn->real_escape_string($singleGenre);

        //addbooks($line);
        //addgenres($singleGenre);
        
        addingGenreKey ($genreInject);

        }

        //sortingDiffGenre();

        //$bookitem = array("author"=>$author, "descrip"=>$descrip, "isbn"=>$isbn, "pages"=>$pages,"rating"=>$rating, "review"=>$review, "title"=>$title, "genre"=>$genre, "url"=>$url);
        //echo $bookitem[0][0];
    
       



  
?>