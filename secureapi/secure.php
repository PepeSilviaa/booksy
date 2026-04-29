<?php
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json');
   header('Access-Control-Allow-Methods: POST');
   header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');


  if ($_SERVER['REQUEST_METHOD'] === 'POST'){

  include("../php/dbconn.php");

  $email = $conn->real_escape_string(trim($_POST['email']));
  $password = $conn->real_escape_string(trim($_POST['password']));
  //echo "$email";
  //echo "$password";

  
  $check = "SELECT * FROM booksy_user WHERE email = '$email' AND pass = '$password'";


  //echo "$check";

  $result = $conn->query($check);

  $num = $result->num_rows;

  if($num == 1){
    $row = $result->fetch_assoc();


    /*
  $data = array(
    'id'=> $row['userID']
    //'num_rows' => $num
  );
  */

  $data = $row['userID'];


  echo json_encode($data);


  }



}
