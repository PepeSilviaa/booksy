
<?php
//pop JS message about password length 

if(isset($_POST['createuser'])){

  $endp = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/createuser.php";
  
  
  $username = $_POST['nameinput'];
  $email = $_POST['emailinput'];
  $password = $_POST['pwordinput'];

  $postdata = http_build_query(

    array(
      'username' => $username,
      'email' => $email,
      'pw' => $password
    )
  
    );
  
  //array sent to the endpoint - http request
  $opts = array(
      'http' => array(
       'method' => 'POST',
       'header' => 'Content-Type: application/x-www-form-urlencoded',
       'content' => $postdata
  
      )
  );
  
      $context = stream_context_create($opts);
      $result = file_get_contents($endp, false, $context);
      //echo gettype($result);

      json_decode($result, true);

      
      if ($result == 1) {
          
        session_start();
        $_SESSION['booksyuser'] = $result;
        header('location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/index.php');
    
        }   
        
  }

?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/reg.css">

</head>
<body">


    <div class= "container mt-6" id="reg-form">


      

      <div class="columns">
        <div class="column">
            <a href = "../index.html" >
              <img src = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/img/logo.png" alt="Booksy homepage">
            </a>
         
        </div>



        <div class="column">
            <h1 class="title">New to Booksy?</h1>
            <h2 class="subtitle">Sign up today</h2>
        </div>
        </div>
  
        <form method = "POST" action = "reg.php" >

        <div class="field mt-5">
        <label class="label">Name</label>
        <div class="control">
          <input class="input" type="text" placeholder="e.g John Smith" name= "nameinput">
        </div>
      </div>
  
      <div class="field mt-5">
        <label class="label">Email</label>
        <div class="control">
          <input class="input" type="email" placeholder="e.g. johnsmith@gmail.com" name="emailinput">
        </div>
      </div>
  
  
      <div class="field mt-5">
        <label class="label">Password</label>
        <div class="control">
          <input class="input" type="text" input pattern="{6,}" placeholder="must be 6 or more characters" name ="pwordinput"> 
        </div>
      </div>
  
      <div class="control mt-5">
        <button class="button submitcolor" input type = "submit" value = "send info" class= "form full" name="createuser">Submit</button>
      </div>
  
     

      </form>
     

  
    </div>
  



  </div>




  </body>

</html>