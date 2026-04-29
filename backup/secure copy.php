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




  /* taken awy 13:28

  

 
    $id = $row['userID'];


  }


  if($result == true){
    json_encode($result);
  }



    /*


    $data = array(

      //'id' => $row['userID'],
      //'num_rows'=> $num
    );



    */


    //echo json_encode($id);

    
  }




/*

  

  while($row = $result->fetch_assoc()){
    $userdetails[] = $row;
}


    //tried this code also to get id of last row queried
    //$last_id = $conn->insert_id;
    //$_SESSION["booksyuser"] = $last_id['userID'];
    //echo $_SESSION["booksyuser"];
 
} else {

}


echo $id;


*/


