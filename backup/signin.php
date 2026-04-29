<?php


 
if(isset($_POST['useremail'])){

$endp = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/secureapi/secure.php?request";


  $data = array('email' =>$_POST['email'], 
          'password'=> $_POST['password']);


    $opts = array(
    'http' => array(
     'header' => "Content-type: application/x-www-form-urlencoded\r\n",
     'method' => 'POST',
     'content' => http_build_query($data)
 
    )
);

    $context = stream_context_create($opts);
    $result = file_get_contents($endp, false, $context);



}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booksy</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
  <link rel = "stylesheet" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/css/signin.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>
<body">

  <div class= "container mt-6" id="signin-form">

    <div class="columns">
      <div class="column">
          <a href = "../index.html" >
            <img src = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/img/logo.png" alt="Booksy homepage">
          </a>
       
      </div>
      <div class="column mt-6">
          <h1 class="title">Sign into Booksy</h1>
          <h2 class="subtitle"></h2>
      </div>
    </div>


  <form action = "../secureapi/secure.php?request" method = "POST" name = "login">

    <div class="field">
      <p class="control has-icons-left has-icons-right">
        <input class="input" type="email" placeholder="Email" name = "email">
        <span class="icon is-small is-left">
          <i class="fas fa-envelope"></i>
        </span>
      </p>
    </div>

      <div class="field">
      <p class="control has-icons-left">
        <input class="input" type="password" placeholder="Password" name = "password">
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
      </p>
    </div>

      
    <div class="field is-grouped">
      <div class="control login-button">
        <button class="button login-button" input type= "submit" value = "send info" class= "form full">Login</button>
      </div>
      </form>
      <div class = "field mt-1">
        <a href = "#"> Forgotten password?</a>
      </div>
    </div>
   

    <div class = "reg-redirect mt-6">
         Not a member? 
          <a href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/reg.php">Register</a>
    </div>




</div>


<?php

if ((isset($_POST['useremail']) &&  isset($_POST['userpword']))) {


echo "username and password worked";


}

?>


    
  </body>

</html>