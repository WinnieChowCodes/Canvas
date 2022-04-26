<?php
//connect to database
require_once 'connection.php';

//Gathers and sanitises the input information
$username = stripslashes($_POST['username']);
$username = mysqli_real_escape_string($connection, $username);
$password = stripslashes($_POST['username']);
$password = mysqli_real_escape_string($connection, $password);

//Create a search query
$query = "SELECT uid, password FROM users WHERE username = '$username'";
$result = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);

//checks if the password matches the hashed password found in the database
if(password_verify($password,$row["password"])){
    if(mysqli_num_rows($result)==1){
        //Set cookies and sessions
        $_SESSION['uid'] = $row["uid"];
        $_SESSION['loggedIn'] = true;
        setcookie("username",$_POST["username"], time() + 60 * 60 * 24 * 30, "/");

        echo "successfully logged in";
        header( "refresh:2;url=main.php" );
    }
    else{
        echo "something went wrong!";
        header( "refresh:2;url=loginPage.php" );
    }
}


?>