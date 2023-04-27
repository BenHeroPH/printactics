<?php

session_start();
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
?>

<!-- MAIN -->
<main>
  <!-- HERO -->
  <div class="nero">
    <div class="nero__heading"></div>
    <p class="nero__text"></p>
  </div>
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
          <center>
            <h2>Register A New Account</h2>
          </center>
          <!-- CENTER ENDS -->
        </div>
        <!-- BOX HEADER ENDS -->
        <form action="customer_register.php" method="post" enctype="multipart/form-data">
          <!-- FORM -->
          <div class="form-group">
            <!-- CONTACT -->
            <label>CONTACT</label>
            <br><br>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Full Name" name="c_name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Contact Number" name="c_contact" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" name="c_email" required>
            </div>
            <!-- ADDRESS -->
            <label>ADDRESS</label>
            <br><br>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Region, Province, City, Barangay" name="c_country" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Postal Code" name="c_city" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Street Name, Building, House No." name="c_address" required>
            </div>
            <!-- CUSTOMER PASSWORD -->
            <div class="form-group">
              <label>CUSTOMER PASSWORD</label>
              <br><br>
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-check tick1"></i>
                  <i class="fa fa-times cross1"></i>
                </span>
                <input type="password" class="form-control" placeholder="Customer Password" id="pass" name="c_pass" required>
                <span class="input-group-addon">
                  <div id="meter_wrapper">
                    <span id="pass_type"></span>
                    <div id="meter"></div>
                  </div>
                </span>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="fa fa-check tick2"></i>
                  <i class="fa fa-times cross2"></i>
                </span>
                <input type="password" class="form-control confirm" placeholder="Confirm Password" id="con_pass" required>
              </div>
            </div>
            <label>CUSTOMER IMAGE</label>
            <input type="file" class="form-control" name="c_image" required>
          </div>

<!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<center>

<!-- <label> Captcha Verification </label> -->

<!-- <div class="g-recaptcha" data-sitekey="6LcHnoQaAAAAAF_WTAEPkd_XO_9XC80G6N1MjrH2"></div> -->

</center>

</div><!-- form-group Ends -->


<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="register" class="btn btn-primary">

<i class="fa fa-user-md"></i> Register

</button>

</div><!-- text-center Ends -->

</form><!-- form Ends -->

</div><!-- box Ends -->

</div><!-- col-md-12 Ends -->



</div><!-- container Ends -->
</div><!-- content Ends -->



<?php include("includes/footer.php");?>
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>


<script>

$(document).ready(function(){

  // Hiding tick and cross icons initially
  $('.tick1').hide();
  $('.cross1').hide();
  $('.tick2').hide();
  $('.cross2').hide();

  $('.confirm').focusout(function(){

    var password = $('#pass').val();
    var confirmPassword = $('#con_pass').val();

    // Checking if password and confirm password fields match
    if(password == confirmPassword){

      $('.tick1').show();
      $('.cross1').hide();
      $('.tick2').show();
      $('.cross2').hide();

    } else {

      $('.tick1').hide();
      $('.cross1').show();
      $('.tick2').hide();
      $('.cross2').show();

    }

  });

});

</script>

<script>

$(document).ready(function(){

  // Function to check password strength while typing
  $("#pass").keyup(function(){
    check_pass();
  });

});

function check_pass() {
  var val=document.getElementById("pass").value;
  var meter=document.getElementById("meter");
  var no=0;
  if(val!="") {
    // If the password length is less than or equal to 6
    if(val.length<=6)no=1;
    // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
    if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;
    // If the password length is greater than 6 and contain alphabet,number,special character respectively
    if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;
    // If the password length is greater than 6 and must contain alphabets,numbers and special characters
    if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;
    if(no==1) {
      $("#meter").animate({width:'50px'},300);
      meter.style.backgroundColor="red";
      document.getElementById("pass_type").innerHTML="Very Weak";
    }
    if(no==2) {
      $("#meter").animate({width:'100px'},300);
      meter.style.backgroundColor="#F5BCA9";
      document.getElementById("pass_type").innerHTML="Weak";
    }
    if(no==3) {
      $("#meter").animate({width:'150px'},300);
      meter.style.backgroundColor="#FF8000";
      document.getElementById("pass_type").innerHTML="Good";
    }
    if(no==4) {
      $("#meter").animate({width:'200px'},300);
      meter.style.backgroundColor="#00FF40";
      document.getElementById("pass_type").innerHTML="Strong";
    }
  } else {
    meter.style.backgroundColor="";
    document.getElementById("pass_type").innerHTML="";
  }
}

</script>

</body>

</html>


<?php
if(isset($_POST['register'])){

    $remoteip = $_SERVER['REMOTE_ADDR'];
    
    if($result['success'] == 0){

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
        move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

        $get_email = "select * from customers where customer_email='$c_email'";
        $run_email = mysqli_query($con,$get_email);
        $check_email = mysqli_num_rows($run_email);

        if($check_email == 1){
            echo "<script>alert('This email is already registered, try another one')</script>";
            exit();
        }

        $customer_confirm_code = mt_rand();
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
        mail($c_email,$subject,$message,$headers);

        $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_ip,customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip','$customer_confirm_code')";

        $run_customer = mysqli_query($con,$insert_customer);

        $sel_cart = "select * from cart where ip_add='$c_ip'";
        $run_cart = mysqli_query($con,$sel_cart);
        $check_cart = mysqli_num_rows($run_cart);

        if($check_cart>0){
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('You have been Registered Successfully')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }else{
            $_SESSION['customer_email']=$c_email;
            echo "<script>alert('You have been Registered Successfully')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
    }
    else{
        echo "<script>alert('Please Select Captcha, Try Again')</script>";
    }
}
?>

