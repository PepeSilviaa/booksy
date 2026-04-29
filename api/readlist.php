
<?php
header('Content-type: application/json');

include ("../php/dbconn.php");
       
$user = $_GET['userID'];


$read = "SELECT * FROM `booksy_bookList`
INNER JOIN booksy_read
ON booksy_bookList.bookID = booksy_read.bookID
WHERE userID = $user";


$result = $conn->query($read);

while($row = $result->fetch_assoc()){

 $bookobject[] = $row;

 echo json_encode($bookobject);
   
}

?>