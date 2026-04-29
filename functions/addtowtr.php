
<?php

session_start();
//needs the bookID and userID

    $id = $_GET['bookID'];
    $userid = $_SESSION["booksyuser"];
    
    
    //echo "$id";
    //echo "$userid";

   if(isset($_SESSION["booksyuser"])) {

 

    //echo $userid;

    //send to endpoint
    //return results
    //if successful then header back to library page to see added book

    $endp = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/addbook.php";
  

    //$id = $_POST['bookID'];
    //$userid = $_POST['userID'];


    $postdata = http_build_query(

        array(
            'userID' => $userid,
            'bookID' => $id    
    )
  
    );

    //echo $postdata; // prints values tested for bookid and userid

  //array sent to the endpoint - http request
    $opts = array(
      'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
       'method' => 'POST',
       'content' => $postdata
      )
  );


    print_r($opts); // prints out array 

    $context = stream_context_create($opts);

    //print_r($context);
    //echo $context;
    
    
      $result = file_get_contents($endp, false, $context);
      
      //error inserting values messages

      //echo $result; 


      //echo gettype($result);  
      //when result is echoed there is a error message back from the insert in table

    

      json_decode($result, true);

      //echo "$result";

      
      if ($result == true) {
          
        header('location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php');
       }  


  } 

?>
