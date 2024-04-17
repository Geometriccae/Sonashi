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
      <form id="repair-form" action="<?php echo base_url('Repair/agent_update/' . $feedback['ticket_id']); ?>"
        method="post">
        <!-- Your existing form fields -->

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label id="location-label" for="agent_name">Select Your Name</label>
              <select id="agent_name" name="agent_name" class="form-control" required>
                <option value="">Select Name</option>
                <option value="Akash" <?php if (!empty ($feedback['agent_name']) && $feedback['agent_name'] == 'Akash')
                  echo 'selected="selected"'; ?>>Akash</option>
                <option value="Ravi" <?php if (!empty ($feedback['agent_name']) && $feedback['agent_name'] == 'Ravi')
                  echo 'selected="selected"'; ?>>Ravi</option>
                <option value="Kalai" <?php if (!empty ($feedback['agent_name']) && $feedback['agent_name'] == 'Kalai')
                  echo 'selected="selected"'; ?>>Kalai</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label id="status-label" for="status">Status</label>
              <select id="status" name="status" class="form-control" required>
                <option value="pending" <?php if ($feedback['status'] == 'pending')
                  echo 'selected="selected"'; ?>>Pending
                </option>
                <option value="in process" <?php if ($feedback['status'] == 'in process')
                  echo 'selected="selected"'; ?>>
                  In Process</option>
                <option value="completed" <?php if ($feedback['status'] == 'completed')
                  echo 'selected="selected"'; ?>>
                  Completed</option>
              </select>
            </div>
          </div>
          <div class="col-md-6" id="chargesField"
            style="display: <?php echo ($feedback['warranty_status'] == 'Warranty Expired') ? 'block' : 'none'; ?>;">
            <div class="form-group">
              <label id="charges-label" for="charges">Enter Charges</label>
              <input type="text" name="charges" id="charges" placeholder="Enter charges" class="form-control">
            </div>
          </div>
        </div>

        <input type="hidden" name="id" value="<?php echo $feedback['id']; ?>">
        <!-- Assuming you have $feedback['id'] available for the edit -->

        <div class="row">
          <div class="col-md-4">
            <button type="submit" id="submit" class="btn btn-primary btn-block">Update</button>
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