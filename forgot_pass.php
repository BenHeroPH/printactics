<?php 
session_start();
include("includes/db.php");
//HINIWALAY KO ANG HEADER TO UPDATE SOME BOOTSTRAP
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto" rel="stylesheet">
  <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/x-icon" href="images/pt_logo_2023.png">

  <title>Print Tactics</title>
  <link href="styles/bootstrap.min.css" rel="stylesheet">
  <link href="styles/backend.css" rel="stylesheet">
  <link href="styles/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<?php
include("functions/functions.php");
include("includes/main.php");
?>

<br><br>


  <main>

  </main>


<div id="content">
    <div class="form-gap"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div class="text-center">
                      <h3><i class="fa fa-lock fa-4x"></i></h3>
                      <h2 class="text-center">Forgot Password?</h2>
                      <p>You can reset your password here.</p>
                      <div class="panel-body">
        
                        <form id="register-form" role="form" autocomplete="off" class="form" method="post">
        
                          <div class="form-group">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                              <input id="email" name="c_email" placeholder="email address" class="form-control"  type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <input name="forgot_pass" class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                          </div>
                          
                          <input type="hidden" class="hide" name="token" id="token" value=""> 
                        </form>
        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </div>
    </div>

</div>




<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
<br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
      <div class="footer-clean">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-sm-4 col-md-3 item">
              <h3>Address</h3>
              <ul>
                <li><a>Head Office: Print Tactics</a></li>
                <li><a>Sitio Elang San Francisco General Trias Cavite</a></li>
              </ul>
              <br>
            </div>
            <div class="col-sm-4 col-md-3 item">
              <h3>Contact Number</h3>
              <ul>
                <li><a>09664486969</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-md-3 item">
              <h3>Email Address</h3>
              <ul>
                <li>
                  <ul class="email">
                    <a href="mailto:PrintTactics@gmail.com" class="email__addr">PrintTactics@gmail.com</a>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="page-footer__subline">
          <div class="container clearfix">
            <div class="copyright">
              &copy; 2022-2023 Print Tactics
            </div>
          </div>
        </div>
      </div>
    </footer>


<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'js/PHPMailer/src/Exception.php';
require 'js/PHPMailer/src/PHPMailer.php';
require 'js/PHPMailer/src/SMTP.php';

if(isset($_POST['forgot_pass'])){
  //Debugging mode Data base konek!
  //$con = mysqli_connect("localhost", "root", "", "ecom_store");

// Kapag Online na site removed this comment.

  $dbservername = "sql313.epizy.com";
  $dbusername = "epiz_32124742";
  $dbpassword = "smx3e4rAkoNs";
  $dbname = "epiz_32124742_ecom_store";
  $con = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

  $c_email = $_POST['c_email'];
  $sel_c = "SELECT * FROM customers WHERE customer_email='$c_email'";
  $run_c = mysqli_query($con, $sel_c);
  $count_c = mysqli_num_rows($run_c);
  $row_c = mysqli_fetch_array($run_c);
  $c_name = $row_c['customer_name'];
  $c_pass = $row_c['customer_pass'];

  if($count_c == 0){
    echo "<script> alert('Sorry, We do not have your email') </script>";
    exit();

  } else {

    $message = "
    <h1 align='center'> Your Password Has Been Sent To You </h1>
    <h2 align='center'> Dear $c_name </h2>
    <h3 align='center'>
    Your Password is : <span> <b>$c_pass</b> </span>
    </h3>
    <h3 align='center'>
    <a href='https://printactics.rf.gd/checkout.php'>
    Click Here To Login Your Account
    </a>
    </h3>
    ";

    $mail = new PHPMailer(true);

    try {
      // SMTP Config
      $mail->isSMTP();
      $mail->Host = 'secret'; 
      $mail->SMTPAuth = true;
      $mail->Username = 'secret'; 
      $mail->Password = 'secret'; 
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      // Sender and recipient settings
      $mail->setFrom('printtactics@zohomail.com', 'Printtactics'); 
      $mail->addAddress($c_email, $c_name);

      // Email messagecontent
      $mail->isHTML(true);
      $mail->Subject = 'Your Password';
      $mail->Body = $message;

      $mail->send();
      echo "<script> alert('Your Password has been sent to you, check your inbox ') </script>";
      echo "<script>window.open('checkout.php','_self')</script>";
    } catch (Exception $e) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    }

  }
}
?>

</body>
</html>
