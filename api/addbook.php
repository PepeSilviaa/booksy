<?php
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json');
   header('Access-Control-Allow-Methods: POST');
   header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');



if($_SERVER['REQUEST_METHOD'] === 'POST'){ 

    include("../php/dbconn.php");


    //$id =  (int)$_POST['userID'];
    $id =  trim($_POST['userID'], '"');
    $bookid = $conn->real_escape_string(trim($_POST['bookID']));


    //$id = $conn->$_POST['userID'];
    //$bookid = $conn->$_POST['bookID'];

    //$id_int = intval($id);
    //$book_id = intval($bookid);

    //$intID = intval($id);

    $date = date('Y-m-d');

    //echo "$id";
    //echo "$bookid";
    //echo "$date";
    //echo "$date";

    $process = "INSERT INTO `booksy_wanttoread` (`wantReadID`, `userID`, `bookID`, `dateadd`) VALUES (NULL, '$id', '$bookid', '$date')";

    //$process = "INSERT INTO `booksy_wanttoread` (`wantReadID`, `userID`, `bookID`, `dateadd`) VALUES (NULL, ".$id." ".$bookid." ".$date.")";

    //echo $process;
    $result = $conn->query($process);

    
    if(!$result){
        echo "ERROR inserting values";
    } else {
        echo "Added to table";
    }

    

}


?>


