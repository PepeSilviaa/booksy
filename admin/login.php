
<?php
  /*
  $user = "booksyadmin1345";
  $password = "qazwsx1"; 


  if( ($_SERVER['PHP_AUTH_USER'] == $user ) && ( $_SERVER['PHP_AUTH_PW'] == $password ))

{


} else {

    header("WWW-Authenticate: Basic realm='Admin Dashboard'");
    header("HTTP/1.0 401 Unauthorized");
    echo "You need to enter a valid username and password.";

    exit;


}
*/

?>







<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign in page</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
 
  <link rel="stylesheet" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/css/admin.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  


</head>
<body">


   <!--main nav bar-->
   <nav class="navbar is-white is-spaced" role="navigation" aria-label="main navigation">
    <div class="navbar-brand image-max-height">
      <a class="navbar-item " href="">
        <div class="column" id="booksy">
          Booksy
        </div>
      </a>



        </div>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">

          <!--maybe put other nav options here-->
          <!---->
          <div class="buttons">
          <a class="button is-white" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/admin/insertbook.php">
              <Strong>Add Book</Strong>
            </a>
            <a class="button is-white" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/admin/editbook.php">
              <Strong>Edit books</Strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class= "container mt-6" id="signin-form">

     

    <div class="columns">
   
      <div class="column mt-6 mb-6">
          <h1 class="title">Booksy Administrator Site</h1>
        

      <!-- 
        <form action="insertook.php" method="post" name ="logindetails">

        <div class="field">
        <p class="control has-icons-left">
        <input class="input" type="text" placeholder="username" required="required" name = "username">
        <span class="icon is-small is-left">
        <i class="fas fa-user"></i>
        </span>
      </p>
    </div>

    <div class="field">
      <p class="control has-icons-left">
        <input class="input" type="password" placeholder="Password" required="required" name = "password">
        <span class="icon is-small is-left">
          <i class="fas fa-lock"></i>
        </span>
      </p>
    </div>

  
    <div class="field is-grouped">
      <div class="control login-button">
        <button class="button login-button" name="submit" value = "login">Login</button>
      </div>
      </div>


</form>
  -->

</div>
</div>

</div> 



    
  </body>

</html>