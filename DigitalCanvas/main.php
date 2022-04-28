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
        <script src="https://kit.fontawesome.com/2f2ccaf2c4.js" crossorigin="anonymous"></script>
    </head>
    <body onload="InitThis();">
    <script type="text/javascript" src="javascript/draw.js"></script>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                File
                </a>
                <div class="dropdown-menu text-white-50 bg-dark" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-white-50 bg-dark" href="gallery.php">Open work</a>
                <a class="dropdown-item text-white-50 bg-dark" href="#">Save work</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white-50 bg-dark" href="#">Settings</a>
                </div>
            </li>
        </div>
    </nav>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Project 1 <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    </br>
    <div class="container">
        <div class="row">
          <div class="col-1 bg-grey">
          <button type="button" class="btn btn btn-outline-dark" onclick="changeColour();"><i class="fa-solid fa-paintbrush"></i></button>
            </br>
            </br>
            <button type="button" class="btn btn btn-outline-dark" onclick="erase();"><i class="fa-solid fa-eraser"></i></button>
          </div>
          <div class="col-10">
            <canvas id="myCanvas" width="900" height="400" style="border:1px solid #000000;">
            </canvas>
            </br>
          </div>
          <div class="col-1">
            Color : <select id="selColor" class="form-select" multiple aria-label="multiple select example" size="6">
                <option value="black" selected="selected" class="bg-black">black</option>
                <option value="blue">blue</option>
                <option value="red">red</option>
                <option value="green">green</option>
                <option value="yellow">yellow</option>
                <option value="gray">gray</option>
            </select>

            <div class="slidecontainer">
            Brush Size: <input type="range" min="1" max="100" value="50" class="slider" id="selWidth">
        </div>
          </div>

        </div>
      </div>
</html>
CREATE;
?>
