
<?php

session_start();
//$id = $_SESSION["booksyuser"];
//echo $id;

//$id = $_SESSION["booksyuser"];

//include("php/dbconn.php");

  $bookID = $_GET['bookID'];

  $endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/show.php?bookID=$bookID";

  //get contents
  $response = file_get_contents($endpoint);

  //array to decode back
  $book = json_decode($response,true);


  foreach($book as $row){
    $id = $row['bookID'];
    $author = $row['author'];
    $title = $row['title'];
    $description = $row["descript"];
    $isbn = $row["isbn"];
    $pages = $row["pages"];
    $rating = $row["rating"];
    $reviews = $row["reviewsTotal"];
    $image = $row["bookCover"];
    $genre = $row["genre"];

    /*

    if(isset($_POST['addbook'])){
      $pid = $_POST['$id'];
  
      echo "$pid number ";
    }

    */


    
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
      
        $(".dropdown-item1").on("click", function () {
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
            <button class="button ml-3 " id="yellowbut" aria-haspopup="true" aria-controls="dropdown-menu" input type ="submit" name="">
              <span>Add to Library</span>
              <span class="icon is-small">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </span>
            </button>
          </div>


          <form method = "post" name = addbook action="testadd.php">
          <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
              <a class="dropdown-item" id="wanttoread">
              <?php
                echo "<input type = 'hidden' name='$id' input type='submit'>";
              ?>
              Want to Read
              </a>
            </form>
              <a class="dropdown-item" id="read">
              <<input type = "hidden" name="read">
                Read
              </a>

            </div>
          </div>
          </form> 

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