//$("h1").append(" You");
//For the breadcrumbs on each page, add in an li element
console.log("hey");
if (title != "Home") {
  if (catAdd != null && catAdd != "") {
    $(".crumbs").append(
      `
        <a href="` +
        catAdd +
        `" class="breadcrumb-item"><li>` +
        category +
        `</li></a>
    `
    );
  }
  if (prodAdd != null && prodAdd != "") {
    $(".crumbs").append(
      `
        <a href="` +
        prodAdd +
        `" class="breadcrumb-item"><li>` +
        product +
        `</li></a>
    `
    );
    $("#addCart").attr("src", "../../img/Add_Cart.png");
  }
}

//Code for if there is a Sale Price set for a product
if (salePrice != "") {
  $("#price").css({
    textDecoration: "line-through",
    fontSize: "2rem",
    color: "gray",
    paddingTop: "5px",
  });
} else {
  $("#salePrice").remove();
}
