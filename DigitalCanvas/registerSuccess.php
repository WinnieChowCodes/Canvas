<?php
include 'functions/connection.php';

//Gathers and sanitises the input information
$name = stripslashes($_POST['name']);
$name = mysqli_real_escape_string($connection, $name);
$email = stripslashes($_POST['email']);
$email = mysqli_real_escape_string($connection, $email);
$username = stripslashes($_POST['username']);
$username = mysqli_real_escape_string($connection, $username);
$password = stripslashes($_POST['password']);
$password = mysqli_real_escape_string($connection, $password);

//Encrypts the password to improve the security
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

//SQL statement to check whether the username already exists within the database and store the result
$selectQuery = "SELECT * FROM users WHERE username ='$username'";
$result = mysqli_query($connection,$selectQuery);

//If the query returns any row, that means that the username already exists within the database
if(mysqli_num_rows($result)>0) {
    echo "Username already exists, please choose another one";
    header( "refresh:2;url=register.php" );
}
else{
    //insert new account
    $insertQuery = "INSERT INTO users(name, username, password) VALUES('$name', '$username', '$password');";
    if(mysqli_query($connection, $insertQuery)){
        session_start();
        //Creates a user session and cookie, storing the uid and the username
        $statement = "SELECT userID FROM users WHERE username = '$username'";
        $result = mysqli_query($connection,$statement);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['uid'] = $row["userID"];
        $_SESSION['LoggedIn'] = true;
        setcookie("username",$_POST["username"], time() + 60 * 60 * 24 * 30, "/");

        echo "Account Successfully Inserted! Redirecting...";
        header( "refresh:2;url=gallery.php" );
    }
    else{
        echo "Something went wrong!";
        header( "refresh:2;url=register.php" );
    }
}
?>
