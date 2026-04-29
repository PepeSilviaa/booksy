<?php

//echo "<p> This is the process page";

include("../php/dbconn.php");


$author = $conn->real_escape_string($_POST["myAuthor"]);
$title = $conn->real_escape_string($_POST["myTitle"]);
$isbn = $conn->real_escape_string($_POST["myISBN"]);
$pages = $conn->real_escape_string($_POST["myPages"]);
$rating = $conn->real_escape_string($_POST["myRating"]);
$reviews = $conn->real_escape_string($_POST["myReviews"]);
$url = $conn->real_escape_string($_POST["myURL"]);
$description =  $conn->real_escape_string($_POST["mydescrip"]);
$genre = $_POST["myGenre"];

echo "<p>new genre is $genre</p>";

$read = "SELECT * FROM booksy_genreList";
$result = $conn->query($read);

  while($row = $result->fetch_assoc()){
  $id = $row["genreID"];
  $name  = $row["genreName"];


  if($genre == $name){
    $key = $id;
  }


  }


$insertQuery = "INSERT INTO booksy_bookList ( author, descript, isbn, pages, rating, reviewsTotal, title, bookCover, genre) 
VALUES ('$author', '$description', '$isbn', '$pages', '$rating', '$reviews', '$title', '$url', '$key')";


echo "<p>$insertQuery</p>";


$result = $conn->query($insertQuery);

if(!$result){
    echo $conn->error;

} else {
    echo "<p>$title has been added to book library </p>";
}




?> 