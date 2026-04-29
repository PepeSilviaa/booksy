
<?php


//include("php/dbconn.php");

  $bookID = $_GET['bookID'];

  $endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/show.php?bookID=$bookID";

  //get contents
  $response = file_get_contents($endpoint);

  //array to decode back
  $book = json_decode($response,true);


  foreach($book as $row){

    $author = $row['author'];
    $title = $row['title'];
    $description = $row["descript"];
    $isbn = $row["isbn"];
    $pages = $row["pages"];
    $rating = $row["rating"];
    $reviews = $row["reviewsTotal"];
    $image = $row["bookCover"];
    $genre = $row["genre"];
  }




  
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booksy</title>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous"/>
    
  <link rel="stylesheet" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/css/ui.css">


  <script>

    //jquery functions

    $(document).ready(function () {
      ~
        $(".dropdown-item").on("click", function () {
          console.log("book added");
          alert('you have added book to your list');
          //figure out to change button here once clicked 

        });


      // Check for click events on the navbar burger icon
      $(".navbar-burger").click(function () {
     
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
        $(".buttons").hide();
      });
    });

  </script>

  <script>
    //to put the values of books into this page - inset code here
    $(document).ready(function () {
      
    });
  </script>

</head>





<body>
  <!--main nav bar-->
  <nav class="navbar is-white is-spaced" role="navigation" aria-label="main navigation">
    <div class="navbar-brand image-max-height">
      <a class="navbar-item " href="">
        <img src="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/img/logo.png" alt="Booksy" width="40" height="28">
        <div class="column" id="booksy">
          Booksy
        </div>
      </a>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/index.php">Home</a>


        <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php">My Library</a>

        <div class="navbar-item has-dropdown is-hoverable has-text-warning-dark">

          <a class="navbar-link" href="#">Explore</a>
          <div class="navbar-dropdown">
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fiction">Fiction</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Non-Fiction">Non-Fiction</a>
            <hr class="navbar-divider">
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Horror">Horror</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Romance">Romance</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Thriller">Mystery</a>>Thriller</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Mystery">Mystery</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fantasy">Fantasy</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=History">History</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Biography">Biography</a>
          </div>

        </div>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">

          <!--maybe put other nav options here-->
          <!---->
          <div class="buttons">
            <a class="button is-white" href="#">
              <Strong>Log In</Strong>
            </a>
            <a class="button is-white" href="#">
              <Strong>Register</Strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!--maybe try bulma form group ??-->
  <!--Title + winner of Fiction books-->
  <section class="hero is-centered is-bold" id="hero-book-box">
    <div class="hero-body is-large">

      <div class="column is-family-primary has-text-centered">
        <!--text area for book winner-->

        <?php
        echo  "<div class='block is-size-3' id= 'topbookheading'>
        $title</div>"
        ?>


       
        <?php
        echo "<div class='block is-size-5 has-text-weight' id='topbookauthor'>
        $author</div>";
        ?>

        
      </div>
    </div>
    </div>
  </section>





  <!--lists-->
  <div class="container is-centered mt-6 mb-6">
    <div class=" columns" id="bookitem">

    <div class="column is-one-quarter" id="left-side-row">

    <?php
    echo  "<div class='column' id='image-box'>
    <img src='$image'>
    </div>";
    ?>
    </div>

  


    <div class="column mr-6" id="middle-side-row">

      <div class="column">
       <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star-half half-star"></span>
        <span class="fa fa-star unchecked"></span>
      </div>

      <div class="column" id="description-box">
      <?php
      echo"<p>{$description}</br></p>";
      ?>
      </div>


      <div class="column" id="buttons-box">
        <div class="dropdown is-hoverable">
          <div class="dropdown-trigger">
            <button class="button ml-3 " id="yellowbut" aria-haspopup="true" aria-controls="dropdown-menu">
              <span>Add to Library</span>
              <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </span>
            </button>
          </div>
          <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
            <?php

                  echo '<a href = "functions/addtowtr.php?bookID='.$bookID.'" class="dropdown-item" id="wanttoread">
                  <input type = "hidden" name="wantoread" input type="submit">
                  Want to Read
                  </a>';



                  echo '<a href = "functions/addtoread.php?bookID='.$bookID.'" class="dropdown-item" id="read">
                  <input type = "hidden" name="wantoread" input type="submit">
                  Read
                  </a>';
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="column is-one-quarter" id="right-side-row">
      <div class="column" id="information-box">
        <p>More Information</p>
      </div>


      <div class="column" id="isbn-box">
        <?php
        echo "<p><Strong>ISBN: </Strong>{$isbn}</p>";
        ?>
      </div>

      <div class="column" id="author-box">
        <?php
        echo " <p><strong>Book Genre: </strong> {$genre}</p>";
        ?>
      </div>

      <div class="column" id="book-format-box">
        <?php
        echo "<p><Strong>Book Author: </Strong>{$author}</p>";
        ?>
      </div>

      <div class="column" id="pages-box">
        <?php
        echo "<p><Strong>Page total: </Strong>{$pages}</p>";
        ?>
      </div>

      <div class="column" id="book-review-count">
        <?php
        echo "<p><Strong>Total book reviews: </Strong>{$reviews}</p>";
        ?>
      </div>

      <div class="column" id="book-rating-count">
        <?php
          echo "<p><Strong>Rating out of 5:  </Strong>{$rating}</p>";
        ?>
      </div>

    </div>
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