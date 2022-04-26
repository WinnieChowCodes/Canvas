<?php
/** 
 * PHP script for the Gallery page
 * 
 * All styling should be implemented using Bootstrap. Refer to the following link
 * if you are having trouble:
 *  - https://www.w3schools.com/bootstrap5/
 *  - https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/ 
*/
include 'header.php';

//Creates the gallery Navigation bar - there will only be two elements here,
//the nav bar brand and an option to add another piece of artwork, which will take the user to 
//the main page
echo <<<CREATE
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Digital Canvas Gallery</a>
    <ul class="navbar-nav float-right">
        <li class="nav-item " id="addArt"><a class="nav-link" href="main.php">Add Artwork + </a></li>
    </ul>
</nav>
CREATE;

//Search query to gather all artwork for the user that is currently logged in  
$query = "SELECT * FROM `art` LEFT OUTER JOIN users ON art.userID = users.userID WHERE art.userID =$uid";
$result = mysqli_query($connection,$query);
$n = mysqli_num_rows($result);

//If the query returns nothing, echo a message
if($n==0){
    echo "<div class='alert alert-dark' role='alert'>
    No artworks found! To get started, please select 'add artwork'
    </div>";
}
else{
    echo "<div class='class=card-columns p-2'>";
    //Show all artworks from the database
    for($i=0;$i<$n;$i++){
        $row = mysqli_fetch_assoc($result);
        echo <<<CREATE
        <div id="artwork" class="card " style="width:20rem;">
            <img class="card-img-top img-fluid" src="img/{$row['image']}"/> <br>
            <div class="card-body">
                    <h3 class="card-title">{$row['title']}</h3>
                    <div class="btn-group">
                        <form method="POST" action="updatePost.php"><button type=submit name="post" value="'{$row['artID']}'" class="btn btn-primary">Update</button></form>
                        <form method="POST" action="deletePost.php"><button type=submit name="post" value="'{$row['artID']}'" class="btn btn-danger">Delete</button></form>           
                    </div>
                </div>
        </div>
        CREATE;
    }
    echo "</div>";
}
?>
