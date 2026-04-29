<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

include("../php/dbconn.php");

$name = $conn->real_escape_string(trim($_POST['nameinput']));
$email = $conn->real_escape_string(trim($_POST['emailinput']));
$password = $conn->real_escape_string(trim($_POST['pwordinput']));

//putting values into user table
$insertuser = "INSERT INTO booksy_user (name, email, pass) 
VALUES ('$name', '$email', '$password')";


//echo "$insertuser";


$result = $conn->query($insertuser);
$last_id = $conn->insert_id;



if(!$result){
    echo "error in registering process";

}  else {
    //header ("Location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/index.php");
    //id of last entry 
   //echo 
}

echo json_encode($last_id);






}




?>


