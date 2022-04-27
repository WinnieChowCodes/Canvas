<?php
/** 
 * PHP script for the digital canvas page
 * I recommend reading through this site to get a better idea on how to 
 * implement the canvas: https://www.w3schools.com/graphics/canvas_intro.asp 
 * 
 * All styling should be implemented using Bootstrap. Refer to the following link
 * if you are having trouble:
 *  - https://www.w3schools.com/bootstrap5/
 *  - https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/ 
*/
include 'header.php';

echo <<<CREATE
<html>
    <head>
        <title>Digital Canvas</title>
    </head>
    <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          File
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Open work</a>
          <a class="dropdown-item" href="#">Save work</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Settings</a>
        </div>
      </li>
  </div>
</nav>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Project 1 <span class="sr-only">(current)</span></a>
      </li>
	  </ul>
	  
  </div>
</nav>

<canvas id="myCanvas" width="1600" height="800" style="border:1px solid #000000;">
</canvas>

    </body>
</html>
CREATE;
?>
