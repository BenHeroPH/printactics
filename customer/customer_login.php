

<div class="box" ><!-- box Starts -->
<div class="box-header" ><!-- box-header Starts -->

<center>
    <h1>LOGIN</h1>
    <p class="lead" >Already our Customer?</p>
</center>

<p class="text1" > HELLO GOOD DAY!</p>
<style>
.text1 {
    color: #777;
    text-align: center;
    margin-right: 380px;

}
</style>


</div><!-- box-header Ends -->

<!--Text Box -->
<form action="checkout.php" method="post" >

    <div class="form-field" >
        <input type="text" class="form-field" placeholder="Phone/Email/Username" name="c_email" required >
    </div>
    
    <div class="form-field" >
        <input type="password" class="form-field" placeholder="Password" name="c_pass" required >
    </div>

    <div class="text-center" >
        <button name="login" value="Login" class="btn btn-primary" >
            <i class="fa fa-sign-in" ></i> Log in
         </button>
    </div>

    <div class="text-center" >
        <button name="register" value="register" class="btn1 btn-primary" onclick="window.location.href='customer_register.php';" >
            <i class="fa-regular fa-id-card fa-lg"></i> Register Here!
        </button>
    </div>

</form>

<!--form Ends -->
<br>
<h4 align="center">
    <a href="forgot_pass.php">Forgot Password </a>
</h4>

</div><!-- box Ends -->



<style>
form {
    margin: 0 auto; 
    width: 500px;
}
form .form-field::before {
  font-size: 20px;
  position: absolute;
  left: 15px;
  top: 17px;
  color: #888888;
  content: " ";
  display: block;
  background-size: cover;
  background-repeat: no-repeat;
}

form .form-field:nth-child(1)::before {
  background-image: url(../images/user-icon);
  width: 20px;
  height: 20px;
  top: 15px;
}

form .form-field:nth-child(2)::before {
  background-image: url(../images/lock-icon.png);
  width: 15px;
  height: 16px;
}
form .form-field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  margin-bottom: 1rem;
  position: relative;
}
form input {
  font-family: inherit;
  width: 100%;
  outline: none;
  background-color: #fff;
  border-radius: 4px;
  border: none;
  display: block;
  padding: 0.9rem 0.7rem;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  color: #4A4A4A;
  text-indent: 40px;
}
form .btn {
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  padding: 1.2rem 2.5rem;
  text-align: center;
  background-color: #47AB11;
  color: #fff;
  border-radius: 4px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  position: relative;
  margin-right: 185px;
  top: 10px;
}
form .btn1 {
  outline: none;
  border: none;
  cursor: pointer;
  display: inline-block;
  margin: 0 auto;
  padding: 1.4rem 2.5rem;
  text-align: center;
  background-color: #47AB11;
  color: #fff;
  border-radius: 4px;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  position: relative;
  left: 83px;
  top: -38px;

}


</style>



















<?php

if(isset($_POST['login'])){

$customer_email = $_POST['c_email'];

$customer_pass = $_POST['c_pass'];

$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

$run_customer = mysqli_query($con,$select_customer);

$get_ip = getRealUserIp();

$check_customer = mysqli_num_rows($run_customer);

$select_cart = "select * from cart where ip_add='$get_ip'";

$run_cart = mysqli_query($con,$select_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_customer==0){

echo "<script>alert('password or email is wrong')</script>";

exit();

}

if($check_customer==1 AND $check_cart==0){

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

}
else {

$_SESSION['customer_email']=$customer_email;

echo "<script>alert('You are Logged In')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

} 


}

?>