
<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    include("../php/dbconn.php");

    // The request is using the delete server method 

    //$id =  trim($_GET['userID'], '"');
    //$id = $_GET['userID'];
    //$id = $conn->real_escape_string(trim($_GET['userID']));
    //$book = $conn->real_escape_string(trim($_GET['bookID']));

    parse_str(file_get_contents("php://input"), $delete_vars);

    $id = trim($delete_vars['userID'], '"');
    $book = $delete_vars['bookID'];

 
    $check = "DELETE FROM booksy_wanttoread WHERE bookID= '$book' AND userID = '$id'";


    echo "$check";


    $result = $conn->query($check);

  
   
    if(!$result){
        echo "error deleting selected book";
        } else {
       echo "removed";
      }

} 

?>

