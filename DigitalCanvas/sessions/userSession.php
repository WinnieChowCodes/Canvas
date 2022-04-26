<?php
/** 
 * PHP script to create a user session
*/

session_start();
$uid="1";
$loggedIn = false;
//checks if a uid session has been returned from the client machine
if(isset($_SESSION['loggedIn'])){
    $uid = $_SESSION['uid'];
    $loggedIn = $_SESSION['loggedIn'];
}
?>
