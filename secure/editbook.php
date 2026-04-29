<?php




    //if(isset($_POST['namefield'])){
      //  include(".../includes/functions.php");
      //  update_movie($_POST['idfield'], $_POST['namefield']);
    //} else {

        //include("../conn.php");
        //$id_data = $conn->real_escape_strong($_GET["editid"]);
        //$readmovie = "SELECT * FROM oscars WHERE id=$id_data";
        //$result = $conn->query($readmovie);

        include("../conn.php");
        $id_data= $conn->real_escape_string($_GET["editid"]);            
        $readmovie = "SELECT * FROM oscars WHERE id= $id_data";
        
        $result = $conn->query($readmovie);
        
        if(!$result){echo $conn -> error;  
        }
        
        //should only return one row data due to the WHERE clause
        while($row = $result->fetch_assoc()){   
            $name_data = $row['movie_name'];
        }



        echo "<form method='POST' action='update.php'>
        <fieldset>
        <label for='nameField'>Name</label>
        <input type='text' value='$name_data'name='nameField'>
        <input type='hidden' value='$id_data' name='idField'>
        <input class='button-primary' type='submit' value='update'>
        </fieldset>
        </form>";

        ?>

        <?php

    function update_book($update_id,$update_name){
        include("../conn.php");

        $update_id = $conn->real_escape_string($update_id);   
        $update_name = $conn->real_escape_string($update_name);

        $updateSQL="UPDATE oscars SET movie_name='$update_name' WHERE id='$update_id' ";$result = $conn->query($updateSQL);    
        
        if(!$result){
            echo $conn->error;  
            }else{
                echo "<p>Update successful <a href='editmovies.php'>back to list</a></p> ";}}?>


?>



    </div>    
    </body>
    </html>