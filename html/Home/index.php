<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  //Add in page values here (title, paypalID)
  $paypalID = "YM55CBNCAHCC6";
  $title = "Level Up";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>

    <style rel="stylesheet" type="text/css">
      .crumbs {display: none;}
    </style>

  </head>
  <body>
    <div class="container">
      <!-- Include the header info -->
      <?php include_once("../../include/header.php"); ?>
      <!-- Eye-catching Carousel with Popular Categories -->
      <?php include_once("../../include/carousel.php"); ?>
      <!--Add all of the categories with an image link to their pages -->
      <div class="row justify-content-center text-center my-4">
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Bullets</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Bullets and Things" title="Bullets and Things" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Vibes</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Vibrators" title="Vibrators" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Dildos</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Dildos" title="Dildos" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Kegelers</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Kegelers" title="Kegelers" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Kinky</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Foreplay and Kinky" title="Foreplay and Kinky" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Bachelorette</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Bachelorette" title="Bachelorette" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="../Anal/anal.php">
            <h2 class="col-12">Anal</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Anal" title="Anal" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Men</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Men" title="For the Men" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Lubes</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Lubes and Cleaners" title="Lubes and Cleaners" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">Everything</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="Everything" title="Everything" />
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <a href="#">
            <h2 class="col-12">On Sale</h2>
            <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../../img/Explosion_Logo2.jpg" alt="On Sale" title="On Sale" />
          </a>
        </div>
      </div>

      <hr />

      <!-- Add in popular categories that will make shopping easier -->
      <div class="row">
        <img class="d-block w-100 col-12 mx-auto" src="../../img/popular_categoriesT.png" alt="Popular Categories" />
      </div>

      <hr />
      <div class="row justify-content-around">
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="Her Items" title="Her Items" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="His Items" title="His Items" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="Our Items" title="Our Items" />
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="LGBTQ+" title="LGBTQ+" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="Oral Enthusiast" title="Oral Enthusiast" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="Anal Aficionado" title="Anal Aficionado" />
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="App/Remote Controlled"title="App/Remote Controlled" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="Games"title="Games" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../../img/popular_categories.png" alt="Under $30" title="Under $30" />
        </div>
      </div>

      <hr />

      <!-- Include the footer on each page -->
      <?php include_once("../../include/footer.php"); ?>

    </div>
    
    <!-- Include all the script tags for Bootstrap, JQuery, and external script -->
    <?php include_once("../../include/scriptTags.php"); ?>
    
  </body>
</html>
