//$("h1").append(" You");
//For the breadcrumbs on each page, add in an li element
if ($catAdd != null && $catAdd != "") {
  $(".crumbs").append(`
        / <a href="<?php echo $catAdd; ?>"><li><?php echo $category; ?></li></a>
    `);
}
if ($prodAdd != null && $prodAdd != "") {
  $(".crumbs").append(`
        / <a href="<?php echo $prodAdd; ?>"><li><?php echo $product; ?></li></a>
    `);
}
