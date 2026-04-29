<?php



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['request'])){


  include("../php/dbconn.php");


  $email = $conn->real_escape_string(trim($_POST['email']));
  $password = $conn->real_escape_string(trim($_POST['password']));
  echo "$email";
  echo "$password";

  
  $check = "SELECT * FROM booksy_user WHERE email = '$email' AND pass = '$password'";


  //echo "$check";

  $result = $conn->query($check);

  $num = $result->num_rows;



  if($num > 0){


    while($row = $result->fetch_assoc()){

      $id = $row["userID"];
      $_SESSION["booksyuser"] = $id;
 
  }
    //tried this code also to get id of last row queried
    //$last_id = $conn->insert_id;
    //$_SESSION["booksyuser"] = $last_id['userID'];
    //echo $_SESSION["booksyuser"];
    //header ("Location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/index.php");

} else {
  header ("Location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/signin.php");
}


echo $id;

}


?>
