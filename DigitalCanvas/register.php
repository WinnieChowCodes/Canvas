<?php
/** 
 * PHP script for the Register page
 * 
 * All styling should be implemented using Bootstrap. Refer to the following link
 * if you are having trouble:
 *  - https://www.w3schools.com/bootstrap5/
 *  - https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/ 
 * 
*/
include 'header.php';

echo <<<CREATE
<!DOCTYPE html>
    <html>
    <head>
    <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: black;
    }
    
    * {
      box-sizing: border-box;
    }
    
   
    .container {
      padding: 16px;
      background-color: white;
    }
    
 
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
    
 
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    .registerbtn {
      background-color: #000000;
      color: rgb(255, 255, 255);
      padding: 16px 20px;
      margin: 8px ;
      border: none;
      border-color: black;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
    
    .registerbtn:hover {
      opacity: 1;
    }
    
    a {
      color: dodgerblue;
    }
    .signin {
      background-color: #f1f1f1;
      text-align: center;
    }
    h1{
        text-align: center;
        font-weight:bold;
    }
    </style>
    </head>
    <body>
    
    <form action="/action_page.php">
      <div class="container">
        <h1>Canvas Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="Username" id="Username" required>

        <label for="Name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="Name" id="Name" required>
    
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
    
        <button type="submit" class="registerbtn">Register</button>
      </div>
      
    </form>
    
    </body>
    </html>
    
CREATE;

?>
