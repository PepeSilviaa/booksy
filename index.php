
<?php

session_start();
//echo $_SESSION['booksyuser'];
   
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booksy</title>


 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/css/bulma-carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">

  <link rel="stylesheet" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/css/ui.css">
 

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bulma-carousel@4.0.3/dist/js/bulma-carousel.min.js"></script>


  <script>

    $(document).ready(function () {

      //carousel JS
      bulmaCarousel.attach('#carousel-demo', {
      autoplay: true,
      loop: true,
      autoplaySpeed: 3000,

      slidesToShow: 3,
      })
    });

  </script>


  
  <?php

  $limit = 5;

  $endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/random.php?limit=$limit";

  //get contents
  $response = file_get_contents($endpoint);

  //array to decode back
  $book = json_decode($response,true);

    print_r($book);

    echo "$book";

  ?>  

  <script>
    //jquery functions for navigation menu 

    $(document).ready(function () {

      // Check for click events on the navbar burger icon
      $(".navbar-burger").click(function () {
       
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
        $(".buttons").hide();

      });

      //fix hoover color when hoovering over item
      $(".hooverbutton").hover(function () {
        $(this).css("background-color", "#f6d8ac");
          },
        function () {
          $(this).css("background-color", "white");
          });
        });

  </script>
</head>


<body>
  <!--navigation-->

  <!--main nav bar-->
  <nav class="navbar is-white is-spaced" role="navigation" aria-label="main navigation">
    <div class="navbar-brand image-max-height">
      <a class="navbar-item " href="#">
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


        <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php" >
          My Library
        </a>

        <div class="navbar-item has-dropdown is-hoverable has-text-warning-dark">
          <a class="navbar-link ">Explore</a>

          <div class="navbar-dropdown">
          <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fiction">Fiction</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Nonfiction">Non-Fiction</a>
            <hr class="navbar-divider">
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Horror">Horror</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Romance">Romance</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Thriller">Thriller</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Mystery">Mystery</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fantasy">Fantasy</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=History">History</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Biography">Biography</a>

          </div>
        </div>
      </div>

      
          <!--maybe another search bar here-->
             <div class='navbar-end'>
                <div class='navbar-item'>

      
            <?php

              

              if(isset($_SESSION['booksyuser'])){

                echo  "
                <div class='buttons' id='changenav'>
                <a class='button is-white'  href= 'http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/functions/logout.php'>
                  <Strong>Log Out</Strong>
                  </a>
                  </div>";
                } else {

                echo 
               
                "<div class='buttons' id='changenav'>
                <a class='button is-white'  href= 'http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/signin.php'>
                <Strong>Log In</Strong>
                </a>
                <a class='button is-white' href= 'http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/reg.php'>
                <Strong>Register</Strong>
                </a>
                </div>";

              }


              

            ?>
        </div>
        </div>
        </div>
      </div>
    </div>
  </nav>



  <!--welcome hero section -->

  <section class="hero is-white is-bold is-large paddinghero">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          'In books I have traveled, not only to other worlds, but into my own'
        </h1>
        <h2 class="subtitle">
          <i>-Anna Quindler</i>
        </h2>

        <form action = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/results.php" method = "post">
        <div class="field is-grouped">
          <p class="control is-expanded is-padding-horizontal padding-vertical ">
            <input class="input" name = "usersearch" type="text" placeholder="Search thousands of books to add to your reading list ">
          </p>
          <p class="control">
            <!--<a class="button" id="yellowbutton">-->
           <input type = "submit" id="yellowbutton" class = "button">
            </a>
          </p>
        </div>
      </form>

      </div>
    </div>
  </section>


  <!-- black heading and carasol-->
  <section class="hero is-bold padding-vertical has-text-centered" id="hero-color-cara">
    <div class="hero-body">
      <div class="container">

        <h2 class="subtitle is-size-4" id="hero-subtitle">
          Browse through our best rated books of all time as voted by Goodreads readers
        </h2>
      </div>
    </div>

    <!--bulma carosal-->
    <section class="section">
      <div class="container is-centered">
        <!-- Start Carousel -->
        <div id="carousel-demo" class="carousel">
   
        <?php

        //while($book = $result->fetch_assoc()){

          foreach($book as $row){

          $id = $row['bookID'];
          $url = $row['bookCover'];
            echo "$url";
          /*
          echo "<div class='item-1'>
          <img src='$url'> <a href='http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id'>
          </div>";
          */
        }
         

        ?>
      
     
        
      </div>
    </section>
  </section>

  <!--genre title-->
  <div class="container is-fluid p-1 my-6">"
    <div class="notification is-white has-text-centered is-size-3 is-family-sans-serif has-text-weight-light">
      Browse our top books in these Popular Genres
    </div>
  </div>

  <!--the Grid genres-->
  <section>
    <div
      class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">
      <!--insert grids-->
      <div class="columns grid infinite " id="genregrid">
        <div class="column ">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fiction" id="hooverbutton">Fiction</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Romance">Romance</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Thriller">Thriller</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Mystery">Mystery</a>
        </div>
      </div>
    </div>

  </section>


  <!--grid top row-->
  <section>
    <div
      class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">
      <div class="columns grid" id="#genrehoover">
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fantasy" >Fantasy</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Nonfiction">Non-Fiction</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Young-Adult" >Young Adult</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=History" >Historical</a>
        </div>
      </div>
    </div>
  </section>

  <!--grid bottom row-->
  <section>
    <div
      class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">
      <div class="columns grid is-family-sans-serif">
        <div class="column">
          <a class="button is-large is-centered hooverbutton"href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Paranormal">Paranormal</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Womens-Fiction" >Womens Fiction</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Science-Fiction" >Science Fiction</a>
        </div>
        <div class="column">
          <a class="button is-large is-centered hooverbutton" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Art">Art</a>
        </div>
      </div>
    </div>

  </section>


  <!--Footer-->
  <footer class="footer">
    <div class="content has-text-centered is-size-7">
      <p>
        <strong>Booksy</strong> by Rosie McGrath</br>
        Want to tell your firends?
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