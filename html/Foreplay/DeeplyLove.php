<?php 
  //Include the config file on each page
  include_once("../../config/constants.php");
  /*Add in page values here (title, catAdd, category, prodAdd, product, prodTitle, imgLoc,
  price, salePrice, prodDesc, specs, paypalID)*/
  $title = "Deeply Love You";
  $catAdd = "../Foreplay/Foreplay.php";
  $category = "Foreplay";
  $prodAdd = "#";
  $product = $title;
  $imgLoc = "../../img/Products/Foreplay/DeeplyLove/";
  $price = 16;
  $prodDesc = "How deep does your love go? Make him fall head-over-heels in love with 
  you by using this flavored throat desensitizing spray. Deeply Love You relaxes your 
  throat muscles and allows you to take his love deeper. With the easy-to-use pump, 
  spray one to two times in the back of your throat prior to oral play and notice a 
  slight numbing sensation that will help relax your throat. It quickly takes effect, 
  and you can feel free to add more if desired. It’s water-based and comes in multiple 
  flavors, he’ll love it and you’ll like it too! <br /><br />

  <em>*Warning: This is a Weapon of Mass Satisfaction!</em>
  ";
  $specs = 'Size: 1 fl oz <br />
  Flavors: Spearmint, Butter Rum, Chocolate Coconut, Chocolate Mint, Salted Caramel
  ';
  $paypalID = "";
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>

    <!-- Include the meta tags, Bootstrap and CSS links -->
    <?php include_once("../../include/headData.php"); ?>

    <!-- Include the code for the darker colored carousel icons -->
    <link rel="stylesheet" type="text/css" href="../../css/carouselIcons.css" />

  </head>

  <body>

    <!-- Add all page content inside this div -->
    <div class="container mx-auto">
        <!--Add navigation bar and breadcrumbs for ease of use-->
        <?php include_once("../../include/header.php"); ?>

        <!-- Include the product page information -->
        <?php include_once("../../include/productPage.php"); ?>
        
 
    </div>

    <!-- Include the footer information -->
    <?php include_once("../../include/footer.php"); ?>

    <!-- Include all script tags -->
    <?php include_once("../../include/scriptTags.php"); ?>

    <script type="text/javascript">
      $("#cartBtn").after(`
        <div class="row justify-content-center" id="ddCartBtn">
          <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="TJDM2SZ94QY6W">
            <table>
            <tr><td><input type="hidden" name="on0" value="Flavors">Flavors</td></tr><tr><td><select name="os0">
              <option value="Spearmint">Spearmint </option>
              <option value="Butter Rum">Butter Rum </option>
              <option value="Chocolate Coconut">Chocolate Coconut </option>
              <option value="Chocolate Mint">Chocolate Mint </option>
              <option value="Salted Caramel">Salted Caramel </option>
            </select> </td></tr>
            </table>
            <input type="image" src="https://levelupsessions.com/pics/Add_Cart.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
      </div>
      `);
      $("#cartBtn").remove();
    </script>

  </body>
</html>
