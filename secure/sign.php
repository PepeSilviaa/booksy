<?php

include("../php/dbconn.php");

//starting session

//login postback

$email = $conn->real_escape_string($_POST['email']);
//$email = htmlentities($email);

$password = $conn->real_escape_string($_POST['pword']);
//$password = htmlentities($password);

$check = "SELECT * FROM booksy_user WHERE email = '$email' AND pass = '$password'";

//print_r($check);

$result = $conn->query($check);

while($row = $result->fetch_assoc()){
    $id = $row['userID'];
}



if(!$result){
  echo $conn->error;
}

$num = $result->num_rows;

if($num > 0){

//$_SESSION['user_success'];
header("Locaton: test2.php");
//header ("Location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/index.php");

$_SESSION["email"];
    //$userpass = $_SESSION["password"] = "pword";

} else { 
    echo "denied";
    //header("Location : '../pages/signin.php'");
}




?>