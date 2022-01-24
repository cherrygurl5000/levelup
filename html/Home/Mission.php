<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  //Add in page values here (title, paypalID)
  $title = "Our Mission";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>
    
  </head>

  <body>

    <!-- Add all page content inside this div -->
    <div class="container mx-auto">
    <!--Add navigation bar and breadcrumbs for ease of use-->
    <?php include_once("../../include/header.php"); ?>

    <div class="row mt-2 infoText">
      <h1>Our Mission</h1>
    </div>
    <div id="description" class="row mb-3">
      <h2 class="text-center w-100 my-2 rounded">
        <em><b>Level Up your LOVE Life!</b></em>
      </h2>
    </div>

    <div class="row my-2">
      <div class="col-12">
        <p>
          Level Up Sessions, LLC&#39;s (Level's) mission is to &#34;Level Up your
          <span id="loves">LOVE</span> Life!&#34; <br />
          Most women are oppressed in a variety of situations. They are
          stressed and unable to express themselves to the fullest extent of
          their abilities. Level wants to empower women to reach their full
          potential and to be completely liberated from sexual oppression.<br />
          Sexuality is one of the most secretive subjects in the world today.
          This is extremely evident in American society as it pertains to the
          female gender. Gender bias is a hot topic due to the double
          standards found in our everyday lives. By giving women the ability
          to explore their sexuality, Level is opening the door to true
          freedom. Unlocking their desire will assist women in becoming more
          confident in their personal and professional lives. We strive to
          keep customers coming back by helping to keep them satisfied and
          reaching ecstasy on a daily basis. Our goal will only be reached
          when the women we serve are happy and sexually healthy. Our
          secondary objective is to keep their partners satisfied and coming
          back for more!
        </p>
      </div>
    </div>

    <!-- Include the footer information -->
    <?php include_once("../../include/footer.php"); ?>

    <!-- Include all script tags -->
    <?php include_once("../../include/scriptTags.php"); ?>


  </body>
</html>
