<?php

session_start();

//kicks user back to log on page
if(!isset($_SESSION['booksyuser'])) {
  header("Location: http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/signin.php");

  } else {

  //echo session_id(); booksyuser
  //sending userID to API to find reading lists from table

  $id = $_SESSION['booksyuser'];

  //id important for deleteing books here
  echo "$id";
  $endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/wtrlist.php?userID=$id";

  $response = file_get_contents($endpoint);

  //echos back book objects 
  //print_r($response);

  //array to decode back users want to read list
  $book = json_decode($response,true);


  }

  //print_r($book);

  //use php now to echo these out onto page 
  //put inside function perhaps when user clicks something on page
  
  //deleting books from table 

/*
  if(isset($_POST['deleteicon'])) {

    $userID = $_SESSION["booksyuser"];
    $bookID = $_GET['']

  }

*/

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

    //jquery functions - 
    $(document).ready(function () {
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
    $(document).ready(function () {
      
    });
  </script>

</head>


<body>
  <!--main nav bar-->
  <nav class="navbar is-white is-spaced" role="navigation" aria-label="main navigation">
    <div class="navbar-brand image-max-height">
      <a class="navbar-item " href="                                                                  ">
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
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Thriller">Thriller</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Mystery">Mystery</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Fantasy">Fantasy</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=History">History</a>
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Childrens">Childrens</a>
          </div>

        </div>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">

          <div class="buttons" id="loginreg">
      
                <a class='button is-white'  href= '../functions/logout.php'>
                  <Strong>Log Out</Strong>
                </a>
            
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!--maybe try bulma form group ??-->
  <!--Title + winner of Fiction books-->
  <section class="hero is-centered is-bold" id="hero">
    <div class="hero-body is-large">

      <div class="column is-family-primary has-text-centered">
        <!--text area for book winner-->

        <div class="block is-size-3 " id="topbookheading">
         <h3>My Books</h3>
        </div>
        <div class="block is-size-5 has-text-weight" id="topbookauthor">
        
        </div>
      </div>
    </div>
    </div>
  </section>





  <!--lists-->
  <div class="container is-centered mt-6 mb-6">


    <div class= "columns" id="sideheading">

        <div class="column is-one-quarter is-centered" id="lists">
        <div class = "column">
        <a href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy" name = "allLists">All Books</a></div>
        <div class = "column"> <a href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php" id = 'joinlinks'>Want to Read</a></div>

        <div class = "column"><a href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/pages/library.php" name = inks>Read</a>
        </div>
        </div>

      
          <div class = "column">Cover</div>
          <div class ="column">Author</div>
          <div class = "column">Title</div>
          <div class ="column">Date added</div>
          <div class ="column"></div>
        </div>
        
        <div class = "columns" id = "boxofbooks">

        <!--rows for each bow column-->
        <div class = 'column' id='empty'>
   
        <?php

          //if book and if button was clicked at side ? ? 
          
          if($book > 1 ){
            

          foreach($book as $row){  

            $image = $row["bookCover"];
            $author = $row['author'];
            $title = $row['title'];
            $date= $row['dateadd'];
    
            $bookID = $row['bookID'];
 
    
    
            //GET varaiables for delete
            //$userID = $_SESSION["booksyuser"];
      
    
            //$userID = $_GET['$id'];
            //$bookID = $_GET['bookID'];
    
            //echo "$date $image $author";
    
            echo "<div class = 'columns m-6' id = 'boxofbooks'>
            <div class = 'column' id='empty'>
            </div>
    
    
            <div class='column ml-6 is-centered' id='imagecover'>
            <figure class='image is-96x96'>
        
            <img src='$image' href= http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$bookID>
            </figure>
            </div>
    
    
            <div class='column ' id='author p-3'>
            $author
            </div>
    
            <div class = 'column' id = 'title p-3'>
            $title
            </div>
    
            <div class = 'column' id='datecreated p-3'>
            $date
            </div>";
    

        /*
            <div class = 'column' id='delete'>
            <a href = '../functions/deletebook.php?bookID=".$bookID."'>
            <i class='far fa-trash-alt fa-clickable name ='deleteicon''></i>
            </a>
            </div>
            
            </div>";
        */

            echo '<div class = "column" id="delete">
            <a href = "../functions/deletebook.php?bookID='.$bookID.'">
            <i class="far fa-trash-alt fa-clickable name ="deleteicon""></i>
            </a>
            </div>
            </div>';
    
              //send bookID TO THE END OF URL of library 

         
            }


          }
        
      
       
      ?>
    
    </div>;
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