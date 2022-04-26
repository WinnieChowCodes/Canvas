<?php
/** 
 * php script for the head of each webpage. Imports bootstrap and JQuery into the site
 * Bootstrap tutorials: 
 *  - https://www.w3schools.com/bootstrap5/
 *  - https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/ 
 * 
 * JQuery tutorials: 
 *  - https://www.w3schools.com/jquery/default.asp 
 * 
*/
include "sessions/userSession.php";
include "functions/connection.php";

echo <<<CREATE
<head>
    <!--Ensures that the site styling remains consistant on multiple devices-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
CREATE;
?>
