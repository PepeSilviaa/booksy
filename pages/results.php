
        <?php
        //key value
        session_start();

        if(isset($_POST['usersearch'])){

         // $answer = $_POST['searchinput'];
 
          $answer = $_POST['usersearch'];

          $endpoint = "http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/api/search.php?usersearch=$answer";

          $response = file_get_contents($endpoint);

          $results = json_decode($response,true);

    
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
      
        $(".dropdown-item").on("click", function () {
         // console.log("book added");
          //alert('you have added book to your list');
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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
              <Strong>Log in</Strong>
            </a>
            <a class="button is-white" href="#">
              <Strong>Register</Strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <div class= "container mt-6" id="reg-form">
    <div class = "columns">
      <form action = "results.php" method = "POST">
        <div class = "column mt-3">
         
             <!--search bar-->

              <div class="field mt-1">
                <label class="label">Search from thousands of our top rated books</label>
                  <div class="control">
                    <input class="input" type="text" placeholder= 'e.g A Game of Thrones'
                    name="usersearch">
                  </div>
                </div>
        </div>

        
        <div class = "column mt-5">
            <div class="control mt-5">
                  <p class="control">
                    <!--<a class="button" id="submitbutton" value="submit" input type="submit">-->
                    <input type = "submit" id="yellowbutton" class = "button">
                  </p>
            </div>
        </div>
      </form>  
    </div>

    <?php
          if(isset($_POST['usersearch'])){
    
          echo "<table class='table is-fullwidth'>
            <thead>
            <!--number of results returned-->
              <tr>
              <th><abbr title='Position'></abbr></th>
                </tr>
                </thead>
                  <!--footer of table-->
                  <tfoot>
                  <tr>
                  <th><abbr title='Position'>

                  
    
                </abbr>
              </th>
              </tr>
            </tfoot>
            <tbody>";

          }
          

            if(isset($_POST['usersearch'])){
            
            foreach($results as $row){
              $id = $row["bookID"];
              $author = $row["author"];
              $title = $row["title"];
              $image = $row['bookCover'];
              
        

              echo "<tr>
                    <th>
                    <figure class='image is-32x32'>
                    <a href = 'http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id'>
                    <img src='$image' href= http://rmcgrath13.lampt.eeecs.qub.ac.uk/booksy/book.php?bookID=$id'>
                    </figure>
                    </th>
                    <!--author of book-->
                    <td>$author</td>
                    <td>
                    </td>
                    <!--title of book here -->
                    <td>$title</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                   <!--add to user library-->
                   <td>
                  <!--button-->
                  <div class='dropdown is-hoverable'>
                  <div class='dropdown-trigger'>
                   <button class='button is-small mt-3' id='yellowbut' aria-haspopup='true' aria-controls='dropdown-menu'>
                  <span>Add to Library</span>
                  <span class='icon is-small'>
                  <i class='fas fa-angle-down' aria-hidden='true'></i>
                  </span>
                </button>
                </div>
    
                <div class='dropdown-menu' id='dropdown-menu' role='menu'>
                <div class='dropdown-content'>";
           
                echo '<a href = "../functions/addtowtr.php?bookID='.$id.'" class="dropdown-item" id="wanttoread">
                <input type = "hidden" name="wantoread" input type="submit">
                Want to Read
                </a>
  
  
                <a href = "../functions/addtoread.php?bookID='.$id.'" class="dropdown-item" id="read">
                <input type = "hidden" name="wantoread" input type="submit">
                Read
              </a>';


             echo "</div>
              </div>
            </div>
            </td>
          </tr>";
        }
      } else{
        echo "<p></p>";
      }


    
            ?>
      </tbody>
      </table>

      <!--page pigmentation-->
      <nav class='pagination is-small' role='navigation' aria-label='pagination'>
                        <a class='pagination-previous'>Previous</a>
                        <a class='pagination-next'>Next page</a>
    
                        <!--list of pages -->
                        <ul class='pagination-list'>
                          <li><a class='pagination-link' aria-label='Go to page 1' Page 46 aria-current='page'>1</a></li>
                          <li><span class='pagination-ellipsis'>&hellip;</span></li>
                          <li><a class='pagination-link' aria-label='Goto page 45'>45</a></li>
         
                        </ul>
                    </nav>
  


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