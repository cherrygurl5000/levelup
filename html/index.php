<?php 
  //Include the config file on each page
  include "../config/constants.php";
  //Add in page values here
  $paypalID = "YM55CBNCAHCC6";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include "./headData.php"; ?>

    <title>Level Up</title>

  </head>
  <body>
    <div class="container">
      <!-- Include the header info -->
      <?php include "./header.php"; ?>
      <!-- Eye-catching Carousel with Popular Categories -->
      <?php include "./carousel.php"; ?>
      <!--Add all of the categories with an image link to their pages -->
      <div class="row justify-content-center text-center my-4">
        <div class="col-6 col-md-4 col-lg-2">
          <h2 class="col-12">Bullets</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Bullets and Things" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Vibes</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Vibrators" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Dildos</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Dildos" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Kegelers</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Kegelers" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Kinky</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Foreplay and Kinky" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Bachelorette</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Bachelorette" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Anal</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Anal" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Men</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Men" />
        </div>
        <div class="col-6 col-md-4 col-lg-2 mt-2">
          <h2 class="col-12">Lubes</h2>
          <img class="d-block w-100 col-12 mx-auto rounded-circle" src="../img/Explosion_Logo2.jpg" alt="Lubes and Cleaners" />
        </div>
      </div>

      <hr />

      <!-- Add in popular categories that will make shopping easier -->
      <div class="row">
        <img class="d-block w-100 col-12 mx-auto" src="../img/popular_categoriesT.png" alt="Popular Categories" />
      </div>

      <hr />
      <div class="row justify-content-around">
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="Her Items" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="His Items" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="Our Items" />
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="LGBTQ+" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="Oral Enthusiast" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="Anal Aficionado" />
        </div>
      </div>
      <div class="row justify-content-around">
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="App/Remote Controlled" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="Games" />
        </div>
        <div class="col-12 col-md-4">
          <img class="d-block w-100 col-12 mx-auto rounded" src="../img/popular_categories.png" alt="Under $30" />
        </div>
      </div>

      <hr />

      <!-- Include the footer on each page -->
      <?php include "./footer.php"; ?>

    </div>
    
    <!-- Include all the script tags for Bootstrap, JQuery, and external script -->
    <?php include "./scriptTags.php"; ?>
  </body>
</html>
