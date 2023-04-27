<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View all products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>PRODUCTS<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
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
            &copy; <?php echo date("Y");?> Print Tactics &trade;
          </div>

          <div class="developer">
            Developed by Print Tactics Team
          </div>

          <div class="designby">
            Design by Print Tactics Team
          </div>

        </div>
      </div>
    </footer>


  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/631ae3fb54f06e12d893a4ac/1gcggl4f8';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
   })();
  </script>
<!--End of Tawk.to Script-->
</body>
</html>
