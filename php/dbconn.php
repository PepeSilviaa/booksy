<?php
    $pass = "FCqcx0T11jRTJqn3";
    $user = "rmcgrath13";
    $webserver = "rmcgrath13.lampt.eeecs.qub.ac.uk";
    $db = "rmcgrath13";

    $conn = new mysqli($webserver, $user, $pass, $db);
    

    if(!$conn){
        echo $conn -> error;
    } 

        
   // if ($conn -> connect_error) 
      //  {echo "there has been an error ".$conn->connect_error;}
      
      
      ?>