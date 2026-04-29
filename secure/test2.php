
<?php
session_start();

if(!isset($_SESSION["email"])){
    $id = $_SESSION["number"];
    echo "<p>hello $id</p>";

  //echo $id;
} else {
    echo "denied";
  //header("Location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/signin.php");
}

?>