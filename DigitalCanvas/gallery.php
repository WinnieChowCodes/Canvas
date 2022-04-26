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

require_once "functions/connection.php";

//Search query to gather all artwork for the user that is currently logged in  
$query = "SELECT * FROM `art` LEFT OUTER JOIN users ON art.userID = users.userID";
$result = mysqli_query($connection,$query);
$n = mysqli_num_rows($result);

if($n==0){
    echo "No artworks found!";
}
else{
    //Show all artworks from the database
    for($i=0;$i<$n;$i++){
        $row = mysqli_fetch_assoc($result);
        echo <<<CREATE
        <div id="artwork" class="card" style="width:20rem;">
            <img class="card-img-top img-fluid" src="{$row['image']}"/> <br>
            <div class="card-body">
                    <h3 class="card-title">{$row['title']}</h3>
                    <div class="btn-group">
                        <form method="POST" action="updatePost.php"><button type=submit name="post" value="'{$row['postid']}'" class="btn btn-primary">Update</button></form>
                        <form method="POST" action="deletePost.php"><button type=submit name="post" value="'{$row['postid']}'" class="btn btn-danger">Delete</button></form>           
                    </div>
                </div>
        </div>
        CREATE;
    }
}
?>
