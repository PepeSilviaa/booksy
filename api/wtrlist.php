
<?php

header('Content-type: application/json');
include ("../php/dbconn.php");

if (isset($_GET['userID'])){

    
    $user = $_GET['userID'];

    $read = "SELECT * FROM `booksy_bookList`    
    INNER JOIN booksy_wanttoread
    ON booksy_bookList.bookID = booksy_wanttoread.bookID
    WHERE userID = $user";

    $result = $conn->query($read);

    while($row = $result->fetch_assoc()){

    $booklists[] = $row;


}


    echo json_encode($booklists);
   

}
       


