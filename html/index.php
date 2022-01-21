<?php 
  //Include the config file on each page
  include "../config/constants.php";
  //Add in page values here
  $paypalID = "YM55CBNCAHCC6";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://kit.fontawesome.com/7cdbf977a6.js" crossorigin="anonymous"></script>
    
    <link rel="shortcut icon" href="../img/LogoIcon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />

    <title>Level Up</title>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <!--Include the logo, search bar, and cart -->
        <?php include "./logoBar.php"; ?>
        <!-- Include the navigation bar -->
        <?php include "./navBar.php"; ?>
      </div>
      <!-- Eye-catching Carousel with Popular Categories -->
      <?php include "./carousel.php"; ?>
      <!--Add all of the categories with an image link to their pages -->
      <div class="row justify-content-center text-center">
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
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js"></script>
  </body>
</html>
