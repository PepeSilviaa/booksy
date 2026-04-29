<?php

    include ("../php/dbconn.php");
 
    header("Content-type: application/json");

    if(isset($_GET['usersearch'])){

        $searchword = $_GET['usersearch'];

        $read = "SELECT * FROM booksy_bookList WHERE author LIKE '%$searchword%' OR title LIKE '%$searchword%'";
    
        $result = $conn->query($read);
        //$dataset = array();
    
        while($row = $result->fetch_assoc()){
            $booksreturn[] = $row;
        }
    
        echo json_encode($booksreturn);

    }

   


?>
