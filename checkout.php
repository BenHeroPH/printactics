<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
include("includes/header.php");

?>

<?php include("includes/main.php");?>


		<section>
			<div id="content" ><!-- content Starts -->
				<div class="container" ><!-- container Starts -->
					<div class="col-md-12" ><!-- col-md-12 Starts -->

						<?php
						if (!isset($_SESSION['customer_email'])) {
						include("customer/customer_login.php");
						} else {
						include("payment_options.php");
						}
						?>


					</div><!-- col-md-12 Ends -->
				</div><!-- container Ends -->
			</div><!-- content Ends -->

		</section>



	<!-- Footer -->
      <footer class="page-footer">

	      <div class="footer-nav">
		    <div class="container clearfix">

		    <div class="footer-nav__col footer-nav__col--contacts">
				  <div class="footer-nav__heading">Contact details</div>
					  </li>
			  </div>

			<div class="footer-nav__col footer-nav__col .address">
				  <li class="address">
				    Head Office: <br> Print Tactics.<br>
				    Sitio Elang San Francisco General Trias Cavite.
          </li>
				</ul>
			</div>


			<div class="footer-nav__col footer-nav__col .phone  footer-nav__col .phone__number">
					<li class="phone">Phone Number:
					<a class="phone__number" href="tel:09664486969">09664486969</a>
</li>
				</ul>
			</div>
			
			<div class="footer-nav__col footer-nav__col .email footer-nav__col .email__addr ">
				<li class="email">Email: <a href="mailto:PrintTactics@gmail.com" class="email__addr">PrintTactics@gmail.com</a>
</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="page-footer__subline">
		<div class="container clearfix">

			<div class="copyright">
				&copy; 2022 Print Tactics Team &trade;
			</div>

			<div class="developer">
				Dev by Print Tactics Team
			</div>

			<div class="designby">
				Design by Print Tactics Team
			</div>
		</div>
	</div>
      </footer>
  <!-- Footer Ends -->


    <script src="js/jquery.min.js"> </script>
    <script src="js/bootstrap.min.js"></script>
    </section>
  </body>
</html>


<!--Fix Bug White Space Issue. wag galawin-->
<style> 
section {
	min-height: 100vh; 
}
</style>