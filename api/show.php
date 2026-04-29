<?php
header('Content-type: application/json');

include ("../php/dbconn.php");
       
$book_id = $_GET['bookID'];

$read = "SELECT * FROM booksy_bookList WHERE bookID = $book_id";

$result = $conn->query($read);


while($row = $result->fetch_assoc()){


 $bookobject[] = $row;

 echo json_encode($bookobject);
   
}



   /* header('Content-type: application/json');


    function buildrequest($result){

    }

    if(isset($_GET['bookID'])){
        $book_id = $_GET['bookID'];
        $read = "SELECT * FROM booksy_bookList WHERE bookID = $book_id";

        include ("../php/dbconn.php");

        $result = $conn->query($read);

        $num = $result->num_rows;

        if($num > 0){

            buildrequest($result);

        } else {

        //go away not authenicated 

        }

    //get a book object by ID - Show individual book

        */

 


    
?>

