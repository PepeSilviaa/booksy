<?php

//key value
$listName = $_GET['genreName'];
$limit = 51;


//set limit for top 50 winners
$endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/top50.php?genreName=$listName&limit=$limit";

$response = file_get_contents($endpoint);

$lists = json_decode($response,true);

//$num = $lists->num_rows;

//print_r($lists);

 // $id = $row["bookID"];
 // $image = $row["bookCover"];
  // was trying num rows to maybe try something like over 5 
  //items create a new container / row 
  //$num = $row->num_rows;
  //print_r($num);

  //echo $image;

  //echo "[$id]";

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
        document.getElementById("#sumbitbutton").value = "Added";
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

    function change();
{
    document.getElementById("submitbutton").value="Close Curtain";
}
function change() // no ';' here
{
    if (this.value=="Close Curtain") this.value = "Open Curtain";
    else this.value = "Close Curtain";
}


function change() // no ';' here
{
    var elem = document.getElementById("submitbutton");
    if (elem.value=="Add to library") elem.value = "Open Curtain";
    else elem.value = "Close Curtain";
}
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
            <a class="navbar-item" href = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/genrelist.php?genreName=Nonfiction">Non-Fiction</a>
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
            <?php
              $image = $lists[0]['bookCover'];
              $id = $lists[0]['bookID'];
              echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
            </figure>
         </div>
         
        <div class="column is-family-primary">
          <!--text area for book winner-->
          <div class="block is-size-2 winner-title">
            Winner
          </div>
          <div class="block is-size-3" id="topbookheading">
            <?php
            $title = $lists[0]['title'];
            echo "$title";
            ?>
          </div>
          <div class="block has-text-weight-bold" id="topbookauthor">
            <?php
            $author = $lists[0]['author'];
            echo "$author";
            ?>

           

              <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                 <button class="button is-small ml-6 " onclick = "change()" id="submitbutton" aria-haspopup="true" aria-controls="dropdown-menu">
                    <span>Add to Library</span>
                    <span class="icon is-small">
                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>

                <div class="dropdown-menu" id="dropdown-menu" role="menu">
                  <div class="dropdown-content">
                  <?php
                  $bookID = $lists[0]['bookID'];
 

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
          

          <div class="block" id = "topbookdescription">
          <?php
            $description = $lists[0]['descript'];
            echo "$description";
            ?>

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
   
     

          <div class='column'>
          <figure class='image is-2by3' id ='imagehide'>

          <?php
            $image = $lists[1]['bookCover'];
            $id = $lists[1]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
      
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
                <?php
                  $bookID = $lists[1]['bookID'];
 

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
          </figure>
        </div>



        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[2]['bookCover'];
            $id = $lists[2]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[2]['bookID'];
 

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
  
          </figure>
        </div>



        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[3]['bookCover'];
            $id = $lists[3]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[3]['bookID'];
 

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
          </figure>
        </div>



        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[4]['bookCover'];
            $id = $lists[4]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[4]['bookID'];
 

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
          </figure>
        </div>


        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[5]['bookCover'];
            $id = $lists[5]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[5]['bookID'];
 

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
        <?php
            $image = $lists[6]['bookCover'];
            $id = $lists[6]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[6]['bookID'];
 

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
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[7]['bookCover'];
            $id = $lists[7]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[7]['bookID'];
 

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
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[8]['bookCover'];
            $id = $lists[8]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[8]['bookID'];
 

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
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[9]['bookCover'];
            $id = $lists[9]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[9]['bookID'];
 

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
        </figure>
      </div>


      <div class="column ">
        <figure class="image is-2by3">
        <?php
            $image = $lists[10]['bookCover'];
            $id = $lists[10]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[10]['bookID'];
 

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
        <?php
            $image = $lists[11]['bookCover'];
            $id = $lists[11]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>

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
              <?php
                  $bookID = $lists[11]['bookID'];
 

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
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[12]['bookCover'];
            $id = $lists[12]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[12]['bookID'];
 

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

        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[13]['bookCover'];
            $id = $lists[13]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[13]['bookID'];
 

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
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[14]['bookCover'];
            $id = $lists[14]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[14]['bookID'];
 

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
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[15]['bookCover'];
            $id = $lists[15]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>

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
              <?php
                  $bookID = $lists[15]['bookID'];
 

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
          <?php
            $image = $lists[16]['bookCover'];
            $id = $lists[16]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[16]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[17]['bookCover'];
            $id = $lists[17]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[17]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[18]['bookCover'];
            $id = $lists[18]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[18]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[19]['bookCover'];
            $id = $lists[19]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[19]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
          <?php
            $image = $lists[20]['bookCover'];
            $id = $lists[20]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[20]['bookID'];
 

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
        <?php
            $image = $lists[21]['bookCover'];
            $id = $lists[21]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[21]['bookID'];
 

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
        </figure>
      </div>

      


      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[22]['bookCover'];
            $id = $lists[22]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[22]['bookID'];
 

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
        </figure>
      </div>



      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[23]['bookCover'];
            $id = $lists[23]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[23]['bookID'];
 

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
        </figure>
      </div>


      <div class="column">
        <figure class="image is-2by3">
        <?php
            $image = $lists[24]['bookCover'];
            $id = $lists[24]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[24]['bookID'];
 

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
        </figure>
      </div>


      <div class="column ">
        <figure class="image is-2by3">
        <?php
            $image = $lists[25]['bookCover'];
            $id = $lists[25]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
              <?php
                  $bookID = $lists[25]['bookID'];
 

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
          <?php
            $image = $lists[26]['bookCover'];
            $id = $lists[26]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[26]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[27]['bookCover'];
            $id = $lists[27]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[27]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[28]['bookCover'];
            $id = $lists[28]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[28]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[29]['bookCover'];
            $id = $lists[29]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[29]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
          <?php
            $image = $lists[30]['bookCover'];
            $id = $lists[30]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[30]['bookID'];
 

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
          <?php
            $image = $lists[31]['bookCover'];
            $id = $lists[31]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[31]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[32]['bookCover'];
            $id = $lists[32]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[32]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[33]['bookCover'];
            $id = $lists[33]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[33]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[34]['bookCover'];
            $id = $lists[34]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[34]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
          <?php
            $image = $lists[35]['bookCover'];
            $id = $lists[35]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[35]['bookID'];
 

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
          <?php
            $image = $lists[36]['bookCover'];
            $id = $lists[36]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[36]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[37]['bookCover'];
            $id = $lists[37]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[37]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[38]['bookCover'];
            $id = $lists[38]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[38]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[39]['bookCover'];
            $id = $lists[39]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[39]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
          <?php
            $image = $lists[40]['bookCover'];
            $id = $lists[40]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[40]['bookID'];
 

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
          <?php
            $image = $lists[41]['bookCover'];
            $id = $lists[41]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[41]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[42]['bookCover'];
            $id = $lists[42]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[42]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[43]['bookCover'];
            $id = $lists[43]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[43]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[44]['bookCover'];
            $id = $lists[44]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[44]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
          <?php
            $image = $lists[45]['bookCover'];
            $id = $lists[45]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[45]['bookID'];
 

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
          <?php
            $image = $lists[46]['bookCover'];
            $id = $lists[46]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[46]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[47]['bookCover'];
            $id = $lists[47]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[47]['bookID'];
 

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
          </figure>
        </div>
  
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[48]['bookCover'];
            $id = $lists[48]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[48]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column">
          <figure class="image is-2by3">
          <?php
            $image = $lists[49]['bookCover'];
            $id = $lists[49]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[49]['bookID'];
 

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
          </figure>
        </div>
  
  
        <div class="column ">
          <figure class="image is-2by3">
          <?php
            $image = $lists[50]['bookCover'];
            $id = $lists[50]['bookID'];
            echo  "<a href = http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id> <img src= '$image' alt='Placeholder image'></a>";
          ?>
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
                <?php
                  $bookID = $lists[50]['bookID'];
 

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