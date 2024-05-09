<?php 
 include_once('partials/header.php'); 
 ?>

<body>
  <div class="slidershow middle"></div>

    <div class="slides">
      <input type="radio" name="r" id="r1" checked>
      <input type="radio" name="r" id="r2" checked>
      <input type="radio" name="r" id="r3" checked>
      <input type="radio" name="r" id="r4" checked>
      <input type="radio" name="r" id="r5" checked>
      <div class="slide s1">
        <img src="../assets/img/allianz1.jpeg" alt="">
      </div>
      <div class="slide">
        <img src="../assets/img/fans1.jpeg" alt="">
      
      </div>
      <div class="slide">
        <img src="../assets/img/team.jpeg" alt="">
      </div>
      <div class="slide">
        <img src="../assets/img/allianz2.jpeg" alt="">
      </div>
      <div class="slide">
        <img src="../assets/img/pic1.jpeg" alt="">
      </div>
    </div>  
    <div class="navigation">
      <label for="r1" class="bar"></label>
      <label for="r2" class="bar"></label>
      <label for="r3" class="bar"></label>
      <label for="r4" class="bar"></label>
      <label for="r5" class="bar"></label>

    </div>  
  </div>
  <?php
    include_once('partials/footer.php');
  ?>  