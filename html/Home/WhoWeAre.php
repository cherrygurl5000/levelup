<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  //Add in page values here (title, paypalID)
  $title = "Who We Are";
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
        <h1>Who Are We...</h1>
      </div>
      <div id="description" class="row mb-3">
        <h2 class="text-center w-100 my-2 rounded">
          <em><b>We are LEVEL</b></em>
        </h2>
      </div>

      <div class="row my-2">
        <div class="col-12">
          <p>
            We're here to Level Up your
            <span id="loves">LOVE</span>
            life, one session at a time!!!<br />
            Our objectives surround the empowerment of women through the
            exploration of their sexuality. Remove the chains of sexual
            oppression imposed upon us at birth, and experience true sexual
            freedom! <br />
            We want to inspire loyalty in our customers by focusing on their
            satisfaction with our one-of-a-kind experience and quality products.
            The ultimate target of Level is to allow women to express themselves
            in ways that have never been possible before. Parties are only
            conducted for women aged 18 and older. Although men are allowed to
            purchase products and visit our website, they are not allowed to
            attend parties under any circumstance. The environment of our
            gatherings needs to be relaxed in order to allow guests to fully
            express themselves. By limiting inhibitions, women are better able
            to explore their sexuality without the pressure exerted from the
            presence of men.<br />
            Personalized attention and caring for our customers is our greatest
            strength. We are focused on assisting our customers in expressing
            themselves and it shows. We provide hostess gifts for the women who
            have Level Up Sessions. Our scheduling and locations are flexible
            because we bring products to you, in the comfort of your home or a
            location that will provide the privacy required to allow party-goers
            to open up and truly express themselves.
          </p>
        </div>
      </div>

      <!-- Include the footer information -->
      <?php include_once("../../include/footer.php"); ?>

      <!-- Include all script tags -->
      <?php include_once("../../include/scriptTags.php"); ?>

  </body>
</html>
