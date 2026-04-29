<?php

session_start();

$id = $_GET['bookID'];
$userid = $_SESSION["booksyuser"];


$endp = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/delete.php";
  


$postdata = http_build_query(

    array(
        'userID' => $userid,
        'bookID' => $id    
)

);

//echo $postdata;


$opts = array(
    'http' => array(
      'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
     'method' => 'DELETE',
     'content' => $postdata
    )
);


print_r($opts);

$context = stream_context_create($opts);

print_r($context);

$result = file_get_contents($endp, false, $context);

//json_decode($result, true);



print_r($result);
//
//if ($result == true) { 
  //header('location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php');
//}  else {
//    echo "fail";
//}



/*
extra bits of code

//'header' => "application/json   "



*/
?>


