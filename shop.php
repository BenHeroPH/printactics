<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover imgs -->
  <main>
    <div class="#">
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Products<h1>

    </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->
    <?php getPro(); ?>
    </div><!-- row Ends -->

    </div><!-- container Ends -->





<?php 
include("includes/footer.php");
?>
  
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
