<?php
/**
 * Connects to the database
 */

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'digitalcanvas';

$connection = mysqli_connect($host,$user,$password,$dbName);

if(!$connection){
    die("Connection Failed");
}
?>
