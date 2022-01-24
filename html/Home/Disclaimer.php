<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  //Add in page values here (title, paypalID)
  $title = "Disclaimer";
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
        <h1>Disclaimer</h1>
      </div>
      <div id="description" class="row mb-3">
        <span style="text-transform: uppercase">
          <p>
            <h4>All sales are final!!!</h4><br />
            All products have been tested to ensure that they are working and
            without defect. If any issues arise, please
            <a href="../Home/Contacts.php" style="color: navy">contact us here.</a
            ><br /><br />
            While Level Up Sessions, LLC (Level) strives to make the information on this website as
            timely and accurate as possible, Level makes no claims, promises, or
            guarantees about the accuracy, completeness, or adequacy of the
            contents of this site. Level expressly disclaims liability for
            errors and omissions in the contents of this site. No warranty of
            any kind, implied, expressed, or statutory, including but not
            limited to the warranties of non-infringement of third party rights,
            title, merchantability, fitness for a particular purpose or freedom
            from computer virus, is given with respect to the contents of this
            website or its links to other internet resources.<br /><br />
            Reference in this site to any specific commercial product, process,
            or service, or the use of any trade, firm or corporation name is for
            the information and convenience of the public, and does not
            constitute endorsement, recommendation, or favoring by Level.
          </p>
        </span>
      </div>

    <!-- Include the footer information -->
    <?php include_once("../../include/footer.php"); ?>

    <!-- Include all script tags -->
    <?php include_once("../../include/scriptTags.php"); ?>

  </body>
</html>
