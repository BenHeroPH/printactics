<div class="box"><!-- box Starts -->

<?php

$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$session_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];


?>

<h1 class="text-center">Payment Options For You</h1>

<p class="lead text-center">

<a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Off line</a>

</p>

<center><!-- center Starts -->
<html>
<head>
<script>
    function myFunction() {
        var x;
        var r = confirm("GOOD DAY! IF YOU WANT TO BUY VIA GCASH, PLEASE MESSAGE US IN CHATBOX (RIGHT AT THE BOTTOM) TO GIVE YOU A PAYMENT GCASH LINK. THANK YOU!");
        if (r == true) {
         x = "Message us in chatbox!";
     }
        else {
         x = "Message us in chatbox!";
     }
     document.getElementById("demo").innerHTML = x;
}
</script>
</head>
<body>
<?php
?>
<button onclick="myFunction()"> <input type="image" src="https://cdn.shopify.com/s/files/1/0573/3695/5056/t/57/assets/buy.gif?v=40396981305412444451660335254" width="400" heigth="400"> </button>
<p id="demo"></p>
</body>
</html>

  </form>


<?php

$i = 0;


$ip_add = getRealUserIp();

$get_cart = "select * from cart where ip_add='$ip_add'";

$run_cart = mysqli_query($con,$get_cart);

while($row_cart = mysqli_fetch_array($run_cart)){

$pro_id = $row_cart['p_id'];

$pro_qty = $row_cart['qty'];

$pro_price = $row_cart['p_price'];

$get_products = "select * from products where product_id='$pro_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$i++;

?>


<input type="hidden" name="item_name_<?php echo $i; ?>" value="<?php echo $product_title; ?>" >

<input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo $i; ?>" >

<input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo $pro_price; ?>" >

<input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $pro_qty; ?>" >


<?php } ?>
<br><br><br>
<h2 class="text-center">Payment Via Gcash QR Code</h2>
<h4 class="text-center">NOTE: Please Pay with exact amount via qr code thank you!</h4>
<input type="image" name="submit" width="290" height="290" src="images/gcash logo.png" >
<input type="image" name="submit" width="290" height="290" src="images/QRcode.JPEG" >


</form><!-- form Ends -->

</center><!-- center Ends --

</div><!-- box Ends -->
