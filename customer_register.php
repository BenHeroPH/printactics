<?php
session_start();
include("includes/db.php");
?>
<!-- I split the html header code instead eh include sa php gawa ng sa pag uupdate 
ng resources at need na resources sa styling ng registration form na ito. ~ben-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto" rel="stylesheet">
  <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="images/pt_logo_2023.png">
  <title>Register your Account - Print Tactics</title>
  <!--UPDATED all Bootstrap 05/15/2023-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/js/bootstrap.min.js"></script>
  <link href="styles/backend.css" rel="stylesheet">
  <link href="styles/bootstrap5.1.3.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>




  <?php include("functions/functions.php");
  include("includes/main.php");?>
<style>
  .check-indicator {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    display: none;
  }

  .check-indicator i {
    color: green;
  }

  .password-match .check-indicator {
    display: inline-block;
  }
</style>
  <!-- MAIN -->
  <main>
    <!-- hero banner section ito kung gusto nyo kau mag design.-->
  </main>
  <!-- CONTENT -->
  <div id="content">
    <!-- CONTAINER -->
    <div class="container">
      <!-- COL-MD-12 -->
      <div class="col-md-12">
        <!-- BOX -->
        <div class="box">
          <!-- BOX HEADER -->
          <div class="box-header">
            <!-- CENTER -->
            <br><br>
            <center>
            <h2>
            <a href="#" id="reloadPage" style="color: inherit; text-decoration: none; position: relative;">
              Create an Account
              <span class="tooltip" style="position: absolute; background-color: #000; color: #fff; padding: 0.5em; border-radius: 4px; visibility: hidden; opacity: 0; transition: visibility 0s, opacity 0.3s ease;"><!--The CSS in this section is to hide the hyperlink text color, the blue thing....-->
                Click to Reload and Reset the page
              </span>
            </a>
            </h2><!-- backend script for tooltip parang minecraft-->
          <script>const r=document.getElementById('reloadPage'),t=r.querySelector('.tooltip');r.addEventListener('mouseover',()=>{t.style.visibility='visible',t.style.opacity='1'}),r.addEventListener('mouseout',()=>{t.style.visibility='hidden',t.style.opacity='0'}),r.addEventListener('mousemove',e=>{const o=t.offsetWidth,c=t.offsetHeight,u=e.clientX-240,f=e.clientY-290;t.style.transform=`translate(${u}px,${f}px)`}),r.addEventListener('click',()=>{location.reload()});</script>
            <p>Get started today by signing up for an account</p>
            </center>
            <!-- CENTER ENDS -->
          </div>
          <!-- BOX HEADER ENDS -->
          <form action="customer_register.php" method="post" enctype="multipart/form-data">
            <!-- FORM -->
            <div class="form-group">
              <!-- CONTACT -->
              <label class="required">CONTACT </label>
              <br>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name" name="c_name" required>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Contact Number" name="c_contact" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address" name="c_email" required>
              </div>
              <br>
              <!-- ADDRESS -->
              <label class="required">ADDRESS </label>
              <div class="form-group">
              <select class="form-control" name="c_country" required>
              <option value="" disabled selected>Select your country <i class="fas fa-caret-down"></i></option>
              <option value="Philippines">Philippines</option>
              <!-- Add more countries as needed -->
            </select>

              <input type="text" class="form-control" placeholder="Province, City "
                  name="c_city" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Street Name, Building, House No., Region, Barangay"
                  name="c_address" required>
              </div>
              <br>
              <!-- CUSTOMER PASSWORD -->
              <div class="form-group">
              <label class="required">PASSWORD </label>
                <input type="password" class="form-control" placeholder="Enter Your Password" id="pass" name="c_pass" required>
                <div class="password-strength">
                  <div class="progress">
                    <div id="strength-meter" class="progress-bar" role="progressbar"></div>
                  </div>
                  <small id="strength-text" class="text-muted">Password Strength</small>
                </div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm Password" id="con_pass" required>
                <span class="check-indicator"><i class="fas fa-times-circle text-danger"></i></span>
              </div>



              <label class="required">Upload Photo </label>
              <input type="file" class="form-control" name="c_image" required>
            </div>

            <!-- form-group Starts -->
<style>

label.required::after {
  content: "*";
  color: red;
  font-size: 1.3em;
}

.tacbox {
  display:block;
  padding: 1em;
  margin: 2em;
  border: 3px solid #ddd;
  background-color: #eee;
  max-width: 455px;
}

.input2 {
  height: 2em;
  width: 2em;
  vertical-align: middle;
}

.btn-custom {
  background-color: #4c6ef5;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-custom:hover {
  background-color: #3951b3;
}

</style>
            <center>
            <div class="tacbox">
              <input id="checkbox" type="checkbox" class="input2" />
              <label for="checkbox"> I agree with the <a href="./terms_and_condition.php">Terms and Conditions</a>.</label>
            </div>
            </center>

            <br>
            <div class="text-center">
              <!-- text-center Starts -->
              <button type="submit" name="register" class="btn btn-primary btn-custom">
                <i class="fa fa-user-md"></i> Register
              </button>

            </div>
            <!-- text-center Ends -->
            <br><br><br>
          </form>
          <!-- form Ends -->
        </div>
        <!-- box Ends -->
      </div>
      <!-- col-md-12 Ends -->
    </div>
    <!-- container Ends -->
  </div>
  <!-- content Ends -->

  <?php include("includes/footer.php");?>

<script>
  // Back end code for password indicator
 $(document).ready(function() {
  // Hiding checkmarks initially
  $('.check-indicator').hide();

  $('.confirm').keyup(function() {
    var password = $('#pass').val();
    var confirmPassword = $('#con_pass').val();

    // Checking if password and confirm password fields match
    if (password !== confirmPassword) {
      $('.check-indicator').removeClass('fa-check-circle text-success').addClass('fa-times-circle text-danger');
    } else {
      $('.check-indicator').removeClass('fa-times-circle text-danger').addClass('fa-check-circle text-success');
    }
  });

  $('#pass').keyup(function() {
    checkPasswordStrength();
  });

  function checkPasswordStrength() {
    var password = $('#pass').val();
    var strengthMeter = $('#strength-meter');
    var strengthText = $('#strength-text');
    var strength = 0;

    if (password.length < 6) {
      strengthMeter.css('width', '0%');
      strengthText.text('Fair');
      return;
    }

    if (password.match(/[a-zA-Z0-9][a-zA-Z0-9]+/)) {
      strength += 1;
    }
    if (password.match(/[~<>?]+/)) {
      strength += 1;
    }
    if (password.match(/[!@#$%^&*()]+/)) {
      strength += 1;
    }
    if (password.length >= 8) {
      strength += 1;
    }
    //CSS STYLING IN INDICATOR
    if (strength === 0) {
      strengthMeter.css('width', '25%');
      strengthMeter.css('background-color', '#FF0000');
      strengthText.text('Weak');
      strengthText.css('color', '#FF0000');
    } else if (strength === 1) {
      strengthMeter.css('width', '50%');
      strengthMeter.css('background-color', '#FF8000');
      strengthText.text('Fair');
      strengthText.css('color', '#FF8000');
    } else if (strength === 2) {
      strengthMeter.css('width', '75%');
      strengthMeter.css('background-color', '#FFCC00');
      strengthText.text('Good');
      strengthText.css('color', '#FFCC00');
    } else if (strength >= 3) {
      strengthMeter.css('width', '100%');
      strengthMeter.css('background-color', '#00FF40');
      strengthText.text('Strong');
      strengthText.css('color', '#00FF40');
    }
  }

  $('form').submit(function(event) {
    var password = $('#pass').val();
    var confirmPassword = $('#con_pass').val();
    var termsChecked = $('#checkbox').is(':checked');

    // Checking if password and confirm password fields match
    if (password !== confirmPassword) {
      event.preventDefault(); // Prevent form submission
      alert('The confirmed password does not match the password entered. Please make sure they match.');
    }

    // Checking if password length is less than 6 characters
    if (password.length < 6) {
      event.preventDefault(); // Prevent form submission
      alert('The password should be at least 6 characters long.');
    }

    // Checking if terms and conditions checkbox is checked
    if (!termsChecked) {
      event.preventDefault(); // Prevent form submission
      alert('Please agree to the terms and conditions before registering.');
    }
  });
});

</script>

</body>

</html>

<!-- Backend for Getting data in data base-->
<!-- Notice that there is capcha backend code here, nag attempt ako na mag implement ng capha im not a robot here.
Pero di ko siya mapagana kau mag ayus muna ~BeN -->
<?php
if (isset($_POST['register'])) {

  $remoteip = $_SERVER['REMOTE_ADDR'];

  if ($result['success'] == 0) {

    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_pass'];
    $c_country = $_POST['c_country'];
    $c_city = $_POST['c_city'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_image = $_FILES['c_image']['name'];
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_ip = getRealUserIp();
    move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

    $get_email = "select * from customers where customer_email='$c_email'";
    $run_email = mysqli_query($con, $get_email);
    $check_email = mysqli_num_rows($run_email);

    if ($check_email == 1) {
      echo "<script>alert('This email is already registered, try another one')</script>";
      exit();
    }

    $customer_confirm_code = mt_rand(); //This is email to send confirm email. well can't setup this while we are debuging sa xampt need to sa server side then eh setup ung SMPT blah blah blah.
    $subject = "Email Confirmation Message"; 
    $from = "macarilaoj@gmail.com";

    $message = "
            <h2>
            Email Confirmation By Printactics $c_name
            </h2>
            <a href='localhost/ecom_store/customer/my_account.php?$customer_confirm_code'>
            Click Here To Confirm Email
            </a>
        ";

    $headers = "From: $from \r\n";
    $headers .= "Content-type: text/html\r\n";
    mail($c_email, $subject, $message, $headers);

    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip,customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip','$customer_confirm_code')";

    $run_customer = mysqli_query($con, $insert_customer);

    if ($run_customer) {
      echo "<script>alert('Registration Successful!')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
    } else {
      echo "<script>alert('Registration Failed, please try again!')</script>";
    }
  } else {
    echo "<script>alert('Please verify that you are not a robot!')</script>";
  }
}
?>
