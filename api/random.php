<?php
header('Content-type: application/json');

include ("../php/dbconn.php");
       
$limit = $_GET['limit'];

//$read = "SELECT * FROM booksy_bookList WHERE bookID = $book_id";

$read = "SELECT bookID,bookCover FROM booksy_bookList LIMIT $limit";

//echo $read;

$result = $conn->query($read);

echo $result;

/*
while($row = $result->fetch_assoc()){

 $bookobject[] = $row;

 echo json_encode($bookobject);
   
}
*/


  ?>  