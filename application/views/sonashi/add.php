<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Welcome to Sonashi" name="description">
  <meta content="Themesbrand" name="author">
  <!-- App favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <title>Repair Form</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Your custom styles -->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap');

    body {
      padding: 100px 0;
      background: #ecf0f4;
      width: 100%;
      height: 100%;
      font-size: 18px;
      line-height: 1.5;
      font-family: 'Roboto', sans-serif;
      color: #222;
    }

    .container {
      max-width: 1230px;
      width: 100%;
    }

    h1 {
      font-weight: 700;
      font-size: 45px;
      font-family: 'Roboto', sans-serif;
    }

    .header {
      margin-bottom: 80px;
    }

    #description {
      font-size: 24px;
    }

    .form-wrap {
      background: rgba(255, 255, 255, 1);
      width: 100%;
      max-width: 850px;
      padding: 50px;
      margin: 0 auto;
      position: relative;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
      box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    }

    .form-wrap:before {
      content: "";
      width: 90%;
      height: calc(100% + 60px);
      left: 0;
      right: 0;
      margin: 0 auto;
      position: absolute;
      top: -30px;
      background: #00bcd9;
      z-index: -1;
      opacity: 0.8;
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
      -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
      box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    }

    .form-group {
      margin-bottom: 25px;
    }

    .form-group>label {
      display: block;
      font-size: 18px;
      color: #000;
    }

    .custom-control-label {
      color: #000;
      font-size: 16px;
    }

    .form-control {
      height: 50px;
      background: #ecf0f4;
      border-color: transparent;
      padding: 0 15px;
      font-size: 16px;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .form-control:focus {
      border-color: #00bcd9;
      -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    textarea.form-control {
      height: 160px;
      padding-top: 15px;
      resize: none;
    }

    .btn {
      padding: .657rem .75rem;
      font-size: 18px;
      letter-spacing: 0.050em;
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    .btn-primary {
      color: #fff;
      background-color: #00bcd9;
      border-color: #00bcd9;
    }

    .btn-primary:hover {
      color: #00bcd9;
      background-color: #ffffff;
      border-color: #00bcd9;
      -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    .btn-primary:focus,
    .btn-primary.focus {
      color: #00bcd9;
      background-color: #ffffff;
      border-color: #00bcd9;
      -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }

    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show>.btn-primary.dropdown-toggle {
      color: #00bcd9;
      background-color: #ffffff;
      border-color: #00bcd9;
    }

    .btn-primary:not(:disabled):not(.disabled):active:focus,
    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show>.btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
      box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    }
  </style>
</head>

<body>

  <div class="container">
    <header class="header">
      <h1 id="title" class="text-center">Repair Form</h1>
      <p id="description" class="text-center">
        Please provide the following information for repair service
      </p>
    </header>
    <div class="form-wrap">
      <script>
        function parseWarrantyPeriod(warrantyString) {
          // Extract numeric value and unit from the warranty string
          var match = warrantyString.match(/(\d+)\s*(Year|Month)/i);

          if (match) {
            var value = parseInt(match[1], 10);
            var unit = match[2].toLowerCase();

            // Convert all periods to days for consistency
            if (unit === "year") {
              return value * 365; // Assuming 1 year = 365 days
            } else if (unit === "month") {
              return value * 30; // Assuming 1 month = 30 days
            }
          }

          return 0; // Default to 0 days if parsing fails
        }

        function checkWarranty() {
          var productSelect = document.getElementById("product");
          var purchaseDateInput = document.getElementById("purchase_date");

          var selectedProduct = productSelect.options[productSelect.selectedIndex];
          var warrantyPeriod = parseWarrantyPeriod(selectedProduct.getAttribute("data-warranty-period"));
          var purchaseDate = new Date(purchaseDateInput.value);

          // Check if the warranty period is over
          var warrantyEndDate = new Date(purchaseDate.getTime() + warrantyPeriod * 24 * 60 * 60 * 1000);

          if (warrantyEndDate < new Date()) {
            var confirmation = confirm("Warranty period is over! Do you want to proceed?");
            return confirmation; // Return true if the user confirms
          } else {
            alert("Warranty is valid!");
            return true; // Allow form submission for valid warranty
          }
        }
      </script>

      <form id="repair-form" action="<?php echo base_url('Repair/create'); ?>" method="post"
        onsubmit="return checkWarranty();">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label id="name-label" for="name">Name</label>
              <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
            </div>
          </div>

          <!-- Add the following code before the closing </form> tag -->
          <div class="col-md-6">
            <div class="form-group">
              <label id="location-label" for="purchase_store">Purchase Store</label>
              <input type="text" name="purchase_location" id="purchase_store" placeholder="Enter purchased store"
                class="form-control" required>
            </div>
          </div>



        </div>
        <input name="routes" type="hidden"  id="routes" value="1">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="category">Category</label>
              <select id="category" name="category" class="form-control" required onchange="updateProductOptions()">
                <option value="">Select Category</option>
                <option value="Mosquito Bat">Mosquito Bat and Machine</option>
                <option value="Fan">Fan</option>
                <option value="Kettle">Kettle</option>
                <option value="Iron">Iron</option>
                <option value="Light">Light</option>
                <option value="Extension Socket">Extension Socket</option>
                <option value="Hair Dryer">Hair Dryer</option>
                <option value="Kitchen Appliances">Kitchen Appliances</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label id="product-label" for="product">Product</label>
              <select id="product" name="product" class="form-control" required>
                <option value="">Select Product</option>
                <!-- Product options will be populated dynamically based on the selected category -->
              </select>
            </div>
          </div>
          <script>
            function updateProductOptions() {
              var category = document.getElementById('category').value;
              var productDropdown = document.getElementById('product');
              productDropdown.innerHTML = '<option value="">Select Product</option>'; // Clear previous options

              // Make AJAX request to fetch product names for the selected category
              if (category !== "") {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                  if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                      var products = JSON.parse(xhr.responseText);
                      products.forEach(function (product) {
                        var option = document.createElement('option');
                        option.value = product.product_name;
                        option.textContent = product.product_name;
                        productDropdown.appendChild(option);
                      });
                    } else {
                      console.error('Request failed: ' + xhr.status);
                    }
                  }
                };
                xhr.open('GET', '<?php echo base_url("Repair/get_products_by_category"); ?>?category=' + category, true);
                xhr.send();
              }
            }


          </script>


        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label id="date-label" for="purchase_date">Purchase Date</label>
              <input type="date" name="purchase_date" id="purchase_date" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group" name="location">
              <label id="location-label" for="location">Area / Location</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="radio">
                    <label><input type="radio" name="location_type" value="inside_chennai" checked
                        onchange="toggleLocationFields()"> Inside Chennai</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="radio">
                    <label><input type="radio" name="location_type" value="outside_chennai"
                        onchange="toggleLocationFields()"> Outside Chennai</label>
                  </div>
                </div>
              </div>

              <div id="inside_chennai_options">
                <select id="location" name="location" class="form-control"
                  onchange="updateLocationValue(); updateRoutes();" required>
                  <option value="">Select Location</option> <!-- Added an empty option as a placeholder -->
                  <?php
                  // Sort the $store_locations array by location names
                  usort($store_locations, function ($a, $b) {
                    return strcmp($a['location'], $b['location']);
                  });
                  foreach ($store_locations as $location):
                    ?>
                    <option value="<?php echo $location['location']; ?>" data-routes="<?php echo $location['routes']; ?>">
                      <?php echo ucwords(strtolower($location['location'])); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div id="outside_chennai_options" style="display: none;">
                <input type="text" id="outside_chennai_location" name="location" placeholder="Enter Location"
                  class="form-control">
              </div>
            </div>

            <!-- Add a hidden input field to store the selected location value -->
            <input id="selected_location" type="hidden" name="location">
            <script>
              function updateLocationValue() {
                var selectedLocation = '';
                var insideChennaiRadio = document.querySelector('input[name="location_type"][value="inside_chennai"]');
                var outsideChennaiRadio = document.querySelector('input[name="location_type"][value="outside_chennai"]');

                if (outsideChennaiRadio.checked) {
                  selectedLocation = document.getElementById('outside_chennai_location').value;
                } else if (insideChennaiRadio.checked) {
                  selectedLocation = document.getElementById('location').value;
                }

                document.getElementById('selected_location').value = selectedLocation;
              }

              function updateRoutes() {
                var purchaseLocation = document.getElementById('location');
                var routesInput = document.getElementById('routes');
                var selectedOption = purchaseLocation.options[purchaseLocation.selectedIndex];
                var routes = selectedOption.getAttribute('data-routes');

                // If outside Chennai radio is checked, set routes value to 7
                // Otherwise, set the routes value from the selected option
                var outsideChennaiRadio = document.querySelector('input[name="location_type"][value="outside_chennai"]');
                if (outsideChennaiRadio.checked) {
                  routes = '7';
                }

                routesInput.value = routes;
              }

              function toggleLocationFields() {
    var insideChennaiOptions = document.getElementById('inside_chennai_options');
    var outsideChennaiOptions = document.getElementById('outside_chennai_options');
    var outsideChennaiRadio = document.querySelector('input[name="location_type"][value="outside_chennai"]');

    if (outsideChennaiRadio.checked) {
      
        alert("Please contact customer care at 8939921548. We cannot process repair requests for locations outside Chennai online.");
        window.location.href = '<?php echo base_url("Repair/thank"); ?>';
       
         // Reselect the "Inside Chennai" radio button
        return false; // Prevent form submission
    } else {
        insideChennaiOptions.style.display = 'block';
        outsideChennaiOptions.style.display = 'none';
        updateRoutes(); // Update routes for inside Chennai
        updateLocationValue(); // Update location value when inside Chennai is selected
        return true; // Allow form submission
    }
}

              
            </script>

           <!-- <script>
              // Function to toggle the required attribute of location input fields
              function toggleLocationRequired() {
                var insideChennaiRadio = document.querySelector('input[name="location_type"][value="inside_chennai"]');
                var outsideChennaiRadio = document.querySelector('input[name="location_type"][value="outside_chennai"]');
                var insideChennaiInput = document.getElementById('location');
                var outsideChennaiInput = document.getElementById('outside_chennai_location');

                // If inside Chennai radio is checked, make inside Chennai input required and remove required attribute from outside Chennai input
                if (insideChennaiRadio.checked) {
                  insideChennaiInput.setAttribute('required', 'required');
                  outsideChennaiInput.removeAttribute('required');
                }
                // If outside Chennai radio is checked, make outside Chennai input required and remove required attribute from inside Chennai input
                else if (outsideChennaiRadio.checked) {
                  outsideChennaiInput.setAttribute('required', 'required');
                  insideChennaiInput.removeAttribute('required');
                }
              }

              // Add event listeners to the radio buttons to toggle required attribute for location input fields
              document.querySelectorAll('input[name="location_type"]').forEach(function (radio) {
                radio.addEventListener('change', toggleLocationRequired);
              });
            </script>-->






          </div>



          <div class="col-md-6">
            <div class="form-group">
              <label id="contact-label" for="contact_number">WhatsApp Number / Contact Number</label>
              <input type="tel" name="contact_number" id="contact_number" placeholder="Enter contact number"
                class="form-control" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label id="alt-contact-label" for="alt_contact_number">Alternative Number</label>
              <input type="tel" name="alt_contact_number" id="alt_contact_number"
                placeholder="Enter alternative contact number" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <button type="submit" id="submit" class="btn btn-primary btn-block">Submit Repair Request</button>
          </div>
        </div>
      </form>





    </div>
  </div>


  <!-- Bootstrap JS and Popper.js (Optional, but needed for some Bootstrap features) -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>