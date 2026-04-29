<?php

include("../php/dbconn.php");

?>



<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Edit Book</title>

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

          <!--nav bar -->
     
          <div class="buttons">
          <a class="button is-white" href="#">
              <Strong>Add Book</Strong>
            </a>
            <a class="button is-white" href="#">
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
            Edit book Library
          </div>
        
        </div>
      </div>
 
    </section>

    <!--form to process selection from booklist -->
    <form action='editbookprocess.php' method='POST'> 

      <div class="field">
        <label class="label"></label>
        <div class="control">
          <div class="select" >
            <select class = "form" name = "selectedBook">
              <option>Select Book to edit</option>
              <?php

               $read = "SELECT * FROM booksy_bookList";
                $result = $conn->query($read);

                while($row = $result->fetch_assoc()){
                    $bookid = $row["bookID"];
                    $author = $row["author"];
                    $title  = $row["title"];
                    $description = $row["descript"];
                    $isbn = $row["isbn"];
                    $pages = $row["pages"];
                    $rating = $row["rating"];
                    $reviews = $row["reviewsTotal"];
                    $image = $row["bookCover"];
                    $genre = $row["genre"];
              
                  echo "<option> {$bookid} {$title}</option>";
                  }



              ?>
            </select>
          </div>
        </div>
      </div>
      
    
      
      
      
      <div class="field is-grouped">
        <div class="control">
        <?php

          echo "<button class='button is-link' href = 'editbookprocess.php?editid=$bookid'>Submit</button>";

        ?>

        </div>
        <div class="control">
          <button class="button is-link is-light">Cancel</button>
        </div>
      </div>
    </form>



      
      
    </div>
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

