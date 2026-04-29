<?php

include("../php/dbconn.php");

$username = $conn->real_escape_string($_POST["username"]);
$pass = $conn->real_escape_string($_POST["password"]);

$check = "SELECT * FROM booksy_admin WHERE username ='$username' AND passfield ='$pass'";

$resultCheck = $conn->query($check);


if(!$resultCheck){
    echo $conn->error;
}

$num =  $resultCheck->num_rows;

if($num > 0 ){
  echo "sucess";
   //header("Location: insertbook.php");
} else {
  echo "denied";
}

?>



<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Add a Book</title>



  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

  <link rel="stylesheet" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/css/admin.css">
 
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


</head>

<body>


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
          <a class="button is-white" href="#">
              <Strong>Add Book</Strong>
            </a>
            <a class="button is-white" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/admin/editbook.php">
              <Strong>Edit books</Strong>
            </a>
            <a class="button is-white" href="#">
              <Strong>Log Out</Strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="container is-centered mt-6 mb-6">

    <section class="hero is-centered is-bold " id="hero-book-box">
      <div class="hero-body is-medium">
  
        <div class="column is-family-primary has-text-centered">
          <!--text area for book winner-->
  
          <div class="block is-size-3 " id="topbookheading">
            Add a Book 
          </div>
        
        </div>
      </div>
 
    </section>

    <form action='processbook.php' method='POST' name = "myformtest"> 

      <div class="field">
        <label class="label">Author </label>
        <div class="control">
          <input class="input" type="text" placeholder="Text input" name="myAuthor">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Title </label>
        <div class="control">
          <input class="input" type="text" placeholder="Text input" name = "myTitle">
        </div>
      </div>
      
      <div class="field">
        <label class="label">ISBN </label>
        <div class="control">
          <input class="input" type="text" placeholder="Text input" name = "myISBN">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Page length </label>
        <div class="control">
          <input class="input" type="text" placeholder="Text input" name = "myPages">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Rating </label>
        <div class="control">
          <input class="input" type="text" placeholder="Out of 5 " name = "myRating">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Total Reviews </label>
        <div class="control">
          <input class="input" type="text" placeholder="Text input" name = "myReviews">
        </div>
      </div>
      
      <div class="field">
        <label class="label">Book cover </label>
        <div class="control">
          <input class="input" type="text" placeholder="URL link to image" name = "myURL">
        </div>
      </div>
      
      <div class="field">
        <label class="label"></label>
        <div class="control">
          <div class="select" >
            <select class = "form" name = "myGenre">
              <option>Select Genre</option>
              <?php

               $read = "SELECT * FROM booksy_genreList";
                $result = $conn->query($read);

                  while($row = $result->fetch_assoc()){
                  $id = $row["genreID"];
                  $name  = $row["genreName"];
         
                  echo "<option> {$name}</option>";
                  }
              ?>
            </select>
          </div>
        </div>
      </div>
      
      <div class="field">
        <label class="label">Book Description</label>
        <div class="control">
          <textarea class="textarea" placeholder="Textarea" name="mydescrip"></textarea>
        </div>
      </div>
      
      
      
      <div class="field is-grouped">
        <div class="control">
          <button class="button is-link">Submit</button>
        </div>
        <div class="control">
          <button class="button is-link is-light">Cancel</button>
        </div>
      </div>
       </form>
  
  </div>


 <!--Footer-->
 <footer class="footer">
  <div class="content has-text-centered is-size-7">
    <p>
      <strong>Booksy</strong> by Rosie McGrath</br>
      Want to tell your friends?
    </p>

    <span class="icon">
      <i class="fab fa-facebook"></i>
    </span>
    <span class="icon has-text-info">
      <i class="fab fa-twitter"></i>
    </span>
    <span class="icon has-text-danger">
      <i class="fab fa-pinterest"></i>
    </span>

  </div>

</footer>


</body>
</html>
  
</body>
</html>

