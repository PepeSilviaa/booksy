<?php

//key value
$listName = $_GET['genreName'];
$limit = 50;


//set limit for top 50 winners
$endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/top50.php?genreName=$listName&limit=$limit";

$response = file_get_contents($endpoint);

$lists = json_decode($response,true);

//$num = $lists->num_rows;

//print_r($lists);

$books = [];

foreach($lists as $row){


  $id = $row["bookID"];
  $image = $row["bookCover"];




  // was trying num rows to maybe try something like over 5 
  //items create a new container / row 
  //$num = $row->num_rows;
  //print_r($num);

  //echo $image;

  //echo "[$id]";


}




?>




<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booksy</title>


  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
  </script>





  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">-->
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css" integrity="sha512-shT5e46zNSD6lt4dlJHb+7LoUko9QZXTGlmWWx0qjI9UhQrElRb+Q5DM7SVte9G9ZNmovz2qIaV7IWv0xQkBkw==" crossorigin="anonymous"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/css/ui.css">

  <script>

    //jquery functions

    $(document).ready(function () {

      $(".dropdown-item").on("click", function() {
        console.log("book added");
        alert('you have added book to your list'); 
        //figure out to change button here once clicked 

      });


      // Check for click events on the navbar burger icon
      $(".navbar-burger").click(function () {
        //var dropMenu = ""

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
        $(".buttons").hide();
        //add a profile pic here for sign in
      });
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
        <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/index.php">Home</a>
    

        <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php">My Library</a>

        <div class="navbar-item has-dropdown is-hoverable has-text-warning-dark">
          <a class="navbar-link ">
            Explore
          </a>

          
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
            <a class="button is-white">
              <Strong>Log In</Strong>
            </a>
            <a class="button is-white">
              <Strong>Register</Strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  
<!--maybe try bulma form group ??-->
<!--Title + winner of Fiction books-->
  <section class="hero is-light">
    <div class="hero-body is-large">
      
    <?php
        echo "<h1 class='title is-size-1'> Best $listName </h1><br>"; 
    ?>
        
   
      

      <div class="columns">
        <div class="column is-one-quarter p-6">
          <!--picture of book winner -->
          
            <figure class="image is-3by4">
              <a href = "book.html">
                <img src="https://images.gr-assets.com/books/1354610192l/16200303.jpg">
              </a>
             
            </figure>
  
         </div>
        <div class="column is-family-primary">
          <!--text area for book winner-->
          <div class="block is-size-2 winner-title">
            Winner
          </div>
          <div class="block is-size-3" id="topbookheading">
            Family Secrets: Secrets of the Night, #1
          </div>
          <div class="block has-text-weight-bold" id="topbookauthor">
            Rebekah McClew 

           

              <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                  <button class="button is-small ml-6 " id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                    <span>Add to Library</span>
                    <span class="icon is-small">
                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                  <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                      Want to Read
                    </a>
                    <a class="dropdown-item">
                      Read
                    </a>
                  </div>
                </div>
              </div>

          </div>
          

          <div class="block" id = "topbookdescription">
            While Laila found herself blending in with the town, my obsession led me to the McAllister estate. Despite the warnings I was told about the estate my curiosity grew and I became obsessed with the home as well as the inhabitants inside.In the end it took two idiots to bite me and one to dig me up. I had no idea what was going to happen to me from this point on but I did know there wasn't a choice; it was inevitably going to happen.
          </div>

        </div>
  
      </div>
      
    </div>

  
  </section>





  <!--lists-->
  <div class="container ">
    <div class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">

    <!--hereeeeee-->
      All Nominees - Top 50 Books
      <!--insert grids-->
      <div class="columns grid infinite hooverbooks my-3 mt-6">
        

          <!--image section-->
          <?php
          
          foreach($lists as $row){
            $id = $row["bookID"];
            $image = $row["bookCover"];

            echo "$image[$row]";
/*
          echo "<div class='column'>
          <figure class='image is-2by3' id ='imagehide'>
          <img src='$image' alt='Placeholder image'>
            <!--button-->
            <div class='dropdown is-hoverable'>
              <div class='dropdown-trigger'>
                <button class='button buttonfade' id='submitbutton' aria-haspopup='true' aria-controls='dropdown-menu'>
                  <span>Add to Library</span>
                  <span class='icon is-small'>
                    <i class='fas fa-angle-down' aria-hidden='true'></i>
                  </span>
                </button>
              </div>
              <div class='dropdown-menu' id='dropdown-menu' role='menu'>
                <div class='dropdown-content'>
                  <a href= class='dropdown-item'>
                    Want to Read
                  </a>
                  <a class='dropdown-item'>
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>";

      */

        }
      ?>
          


        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1494428973l/43641.jpg" alt="Placeholder image">
  
            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span id = "remove-from">Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
  
          </figure>
        </div>



        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1327881361l/320.jpg" alt="Placeholder image">

            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>



        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1367545443l/157993.jpg" alt="Placeholder image">

            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>


        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1327903636l/21787.jpg" alt="Placeholder image">

            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>
      </div>
    </div>




<!--line two-->

<div class="container">
  <div class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">


    <!--insert grids-->
    <div class="columns grid infinite my-3 mt-6">
      <div class="column">


        <!--image section-->
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1345958969l/128029.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1457810586l/12232938.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1344922523l/1953.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1484565687l/77203.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>


      <div class="column ">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1388193707l/5043.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </div>


<!--line three of books-->
<div class="container ">
  <div class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">
    <!--insert grids-->
    <div class="columns grid infinite my-3 mt-6">
      <div class="column">


        <!--image section-->
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1376080877l/18304351.jpg" alt="Placeholder image">
        

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1400887375l/22091081.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>

        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1392504332l/1243240.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1436456720l/9647295.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1423507357l/24892572.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </div>



  <!--line four of books-->
  
  <div class="container">
    <div class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">
  
  
      <!--insert grids-->
      <div class="columns grid infinite my-3 mt-6">
        <div class="column">
  
  
          <!--image section-->
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1420795201l/20342617.jpg" alt="Placeholder image">
  
            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1479368199l/3431100.jpg" alt="Placeholder image">
  
            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1387711869l/345396.jpg" alt="Placeholder image">
  
            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1411337895l/22791973.jpg" alt="Placeholder image">
  
            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
            <img src="https://images.gr-assets.com/books/1376725117l/5417.jpg" alt="Placeholder image">
  
            <!--button-->
            <div class="dropdown is-hoverable">
              <div class="dropdown-trigger">
                <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                  <span>Add to Library</span>
                  <span class="icon is-small">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content">
                  <a href="#" class="dropdown-item">
                    Want to Read
                  </a>
                  <a class="dropdown-item">
                    Read
                  </a>
                </div>
              </div>
            </div>
          </figure>
        </div>
      </div>
    </div>


<!--line five of books-->


<div class="container">
  <div class="blockgrid has-text-centered is-size-5 has-text-weight-light is-family-sans-serif is-column-gap p-2 my-6 mx-5 is-8">


    <!--insert grids-->
    <div class="columns grid infinite my-3 mt-6">
      <div class="column">


        <!--image section-->
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1327418204l/12690982.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>

      


      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1479513427l/30312891.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
              </div>
              <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1390080028l/4732276.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1393614448l/12976689.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>


      <div class="column ">
        <figure class="image is-2by3">
          <img src="https://images.gr-assets.com/books/1388488473l/643750.jpg" alt="Placeholder image">

          <!--button-->
          <div class="dropdown is-hoverable">
            <div class="dropdown-trigger">
              <button class="button" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                <span>Add to Library</span>
                <span class="icon is-small">
                  <i class="fas fa-angle-down" aria-hidden="true"></i>
                </span>
              </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
              <div class="dropdown-content">
                <a href="#" class="dropdown-item">
                  Want to Read
                </a>
                <a class="dropdown-item">
                  Read
                </a>
              </div>
            </div>
          </div>
        </figure>
      </div>
    </div>
  </div>


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