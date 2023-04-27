<?php

session_start();

include("./includes/db.php");
include("./includes/header.php");
include("../../functions/functions.php");
include("./includes/main.php");

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Custom T-Shirt Design</title>
  <link rel="stylesheet" href="./style.css">
  <link href="../../styles/bootstrap.min.css" rel="stylesheet">
  <link href="../../styles/backend.css" rel="stylesheet">
  <link href="../../styles/style.css" rel="stylesheet">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- Create the container of the tool -->
        <div id="tshirt-div_1">
            <!-- 
                Initially, the image will have the background tshirt that has transparency
                So we can simply update the color with CSS or JavaScript dinamically
            -->
            <img id="tshirt-backgroundpicture" src="https://ourcodeworld.com/public-media/gallery/gallery-5d5afd3f1c7d6.png"/>

            <div id="drawingArea" class="drawing-area">         
                <div class="canvas-container">
                    <canvas id="tshirt-canvas" width="200" height="400"></canvas>
                </div>
            </div>
        </div>
        <p>To remove a loaded picture on the T-Shirt select it and press the <kbd>DEL</kbd> key.</p>
        </div>

   <!-- partial:index.partial.html -->
<!-- Create the container of the tool -->
<br>
        <div id="tshirt-div_2">
            <!-- 
                Initially, the image will have the background tshirt that has transparency
                So we can simply update the color with CSS or JavaScript dinamically
            -->
            <img id="tshirt-backgroundpicture" src="https://cdn.discordapp.com/attachments/953189008723308577/1099571345567797348/crew_back.png"/>


            <div id="drawingArea" class="drawing-area">         
                <div class="canvas-container">
                    <canvas id="tshirt-canvas" width="200" height="400"></canvas>
                </div>
            </div>
          </div>
        
        
        <!-- The select that will allow the user to pick one of the static designs -->
        <br>
        <label for="tshirt-design">T-Shirt Design:</label>
        <select id="tshirt-design">
        
            <option value="">Select one of our designs ...</option>
            <option value="https://ourcodeworld.com/public-media/gallery/gallery-5d5b0e95d294c.png">Batman</option>
        </select>

        <!-- The Select that allows the user to change the color of the T-Shirt -->
        <br><br>
        
        <div class="color-picker-container">
  <label for="tshirt-color">T-Shirt Color:</label>
  <div id="selected-color" class="selected-color"></div>
</div>

<select id="tshirt-color" class="color-picker">
  <!-- You can add any color with a new option and defining its hex code -->
  <option value="#fff">White</option>
  <option value="#000">Black</option>
  <option value="#f00">Red</option>
  <option value="#008000">Green</option>
  <option value="#ff0">Yellow</option>
  <option value="#b2beb5">Ash Grey</option>
  <option value="#b0d12a">Neon Green</option>
  <option value="#f78fa7">Pink Sherbet</option>
  <option value="#87f1ff">Cyan</option>
  <option value="#b78727">California Gold</option>
  <option value="#63686a">Dark Grey</option>
</select>


<div id="tshirt-color" class="color-picker"></div>
<label for="tshirt-color">T-Shirt Color:</label>
  <button class="color" style="background-color: #fff; width: 24px; height: 24px;" data-color="#fff" ></button>
  <button class="color" style="background-color: #c3c7cb; width: 24px; height: 24px;" value="#c3c7cb" ></button>
  <button class="color" style="background-color: #808080; width: 24px; height: 24px;" data-color="#808080"></button>
  <button class="color" style="background-color: #000; width: 24px; height: 24px;" data-color="#000"></button>
  <button class="color" style="background-color: #ff0000; width: 24px; height: 24px;" data-color="#ff0000"></button>
  <button class="color" style="background-color: #ffa500; width: 24px; height: 24px;" data-color="#ffa500"></button>
  <button class="color" style="background-color: #ffff00; width: 24px; height: 24px;" data-color="#ffff00"></button>
  <button class="color" style="background-color: #008000; width: 24px; height: 24px;" data-color="#008000"></button>
  <button class="color" style="background-color: #00f; width: 24px; height: 24px;" data-color="#00f"></button>
  <button class="color" style="background-color: #ff69b4; width: 24px; height: 24px;" data-color="#ff69b4"></button>
  <button class="color" style="background-color: #b78727; width: 24px; height: 24px;" data-color="#b78727"></button>
  <button class="color" style="background-color: #b2beb5; width: 24px; height: 24px;" data-color="#b2beb5"></button>
  <button class="color" style="background-color: #f78fa7; width: 24px; height: 24px;" data-color="#f78fa7"></button>
</div>



<script>
  
</script>


        <br><br>
        <label for="tshirt-custompicture">Upload your own design:</label>
        <input type="file" id="tshirt-custompicture" />
        

        <br><br>

        <canvas id="tshirt-canvas" width="100" height="100"></canvas>
       
        <div class="canvas__container">
            <canvas id="cnvs" class="canvas__canvas"></canvas>
            <img src="" id="mirror" class="canvas__mirror" />
          </div>
<!--text button-->
         
        
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fabric.js/3.6.3/fabric.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js'></script>
<script src="./script.js"></script>



<footer class="page-footer">
  <div class="footer-nav">
    <div class="container clearfix">
      <div class="footer-nav__col footer-nav__col--contacts">
        <div class="footer-nav__heading">Contact details</div>
      </div>
      <div class="footer-nav__col footer-nav__col--address">
        <ul class="address">
          <li>Head Office:<br>Print Tactics.<br>Sitio Elang San Francisco General Trias Cavite.</li>
        </ul>
      </div>
      <div class="footer-nav__col footer-nav__col--phone">
        <ul class="phone">
          <li>Phone Number:<a class="phone__number" href="tel:09664486969">09664486969</a></li>
        </ul>
      </div>
      <div class="footer-nav__col footer-nav__col--email">
        <ul class="email">
          <li>Email:<a href="mailto:PrintTactics@gmail.com" class="email__addr">PrintTactics@gmail.com</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="page-footer__subline">
    <div class="container clearfix">
      <div class="copyright">
        &copy; <?php echo date("Y");?> Print Tactics &trade;
      </div>
      <div class="developer">
        Developed by Print Tactics Team
      </div>
      <div class="designby">
        Design by Print Tactics Team
      </div>
    </div>
  </div>
</footer>



