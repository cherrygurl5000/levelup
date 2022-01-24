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
    <h1>Contact Us</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <p>
        Please feel free to contact us using the form below.
      </p>
    </div>
  </div>

  <div class="col-12">
    <h3>Send us your Comments</h3>
  </div>

  <div class="col-12">
    <form action="">
      <div class="form-group row">
        <label for="name" class="col-md-2 col-form-label align-self-center"
          >Name: *</label
        >
        <div class="col-md-10">
          <input
            type="text"
            class="form-control align-self-center"
            id="name"
            name="name"
            placeholder="Name"
          />
        </div>
      </div>

      <div class="form-group row">
        <label for="emailid" class="col-md-2 col-form-label">Email: </label>
        <div class="col-md-10">
          <input
            type="email"
            class="form-control"
            id="emailid"
            name="emailid"
            placeholder="Email"
          />
        </div>
      </div>

      <div class="form-group row">
        <label
          for="phone"
          class="col-12 col-md-2 col-form-label align-self-center"
          >Phone Number:
        </label>
        <div class="col-5 col-sm-4 col-md-3 align-self-center">
          <div class="input-group">
            <div class="input-group-addon">(</div>
            <input
              type="tel"
              class="form-control"
              id="areacode"
              name="areacode"
              placeholder="Area Code"
              maxlength="3"
            />
            <div class="input-group-addon">)</div>
          </div>
        </div>
        <div class="col-7 col-sm-6 col-md-7 align-self-center">
          <input
            type="tel"
            class="form-control"
            id="phone"
            name="phone"
            placeholder="Phone Number"
            maxlength="7"
          />
        </div>
      </div>

      <div class="form-group row">
        <label class="ml-3" id="reason">Reason: *</label> <br />
        <fieldset class="col-10 offset-1">
          <input type="checkbox" id="booking" value="booking" />
          <label for="booking" class="checks">Booking Information </label
          ><br />
          <input type="checkbox" id="products" value="products" />
          <label for="products" class="checks">Product Information </label
          ><br />
          <input type="checkbox" id="other" value="other" />
          <label for="other" class="checks">Other </label><br />
        </fieldset>
      </div>

      <div class="form-group row">
        <label for="feedback" class="col-md-2 col-form-label"
          >Comments:
        </label>
        <div class="col-md-10">
          <textarea
            class="form-control"
            id="feedback"
            name="feedback"
            rows="12"
          ></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="offset-md-2 col-md-10">
          <button type="button" class="btn btn-primary" onclick="mail()">
            Submit
          </button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </div>
    </form>
  </div>
</div>



    <!-- Include the footer information -->
    <?php include_once("../../include/footer.php"); ?>

    <!-- Include all script tags -->
    <?php include_once("../../include/scriptTags.php"); ?>

  </body>
</html>
