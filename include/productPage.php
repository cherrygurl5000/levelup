<div class="row mb-3 justify-content-center infoText">
    <h1><?php echo $title; ?></h1>
</div>

<!-- Include the modal for the images -->
<?php include("../../include/prodModal.php"); ?>

<div class="row mt-2">
    <p><em><b>*Click an image to view more</b></em></p>
</div>
<div class="row mb-2 text-center justify-content-center">
    <h1 id="price">$<?php echo $price; ?></h1>
    <h1 id="salePrice" class="ml-4">$<?php echo $salePrice; ?></h1>
</div>

<div class="row justify-content-center" id="cartBtn">
    <!-- Include the add to cart button -->
    <?php include("../../include/addToCart.php"); ?>
</div>

<!--Add the Product Description and Specifications-->
<div class="row justify-content-center justify-content-sm-start">
    <h3 class="p-2 rounded fits">Product Description</h3>
</div>
<div class="row mx-2">
    <p><?php echo $prodDesc; ?></p>
</div>
<div class="row justify-content-center justify-content-sm-start" id="specs">
    <h3 class="p-2 rounded fits">Specifications</h3>
</div>
<div class="row mx-2 mb-2">
    <p><?php echo $specs; ?></p>
</div>