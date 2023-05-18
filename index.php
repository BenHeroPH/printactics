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
    <div class="txt_products">
            <!-- <h1>Products<h1> --> 
<!-- Dedicated for this Text Style -->
<style>
.txt_products {
  text-align: center;
    width: 40em;
    margin: 2.5em auto;
    padding: 1em;
    border-radius: 8px;
    border-top: 1px solid #eee;
}
</style>
    </div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

<div class="bbb_viewed">
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="bbb_main_container">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title">Best selling products</h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="image/PSHOP6.webp" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₱250<span>300</span></div>
                                    <div class="bbb_viewed_name"><a href="https://printactics.rf.gd/black-tshirt-alien-design">Funky Cartoony Alien Design Black T-Shirt</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="image/PSHOP7.webp" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₱300</div>
                                    <div class="bbb_viewed_name"><a href="https://printactics.rf.gd/one-piece-shirt">Black T-Shirt One Piece Anime - Luffy Design</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="image\PSHOP2_4.webp" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₱250</div>
                                    <div class="bbb_viewed_name"><a href="https://printactics.rf.gd/original-black-t-shirt-design">Tshirt Anime [Glitch Velocity] Original Design</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="image/PSHOP3.webp" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₱475</div>
                                    <div class="bbb_viewed_name"><a href="https://printactics.rf.gd/zero-two-shirt">Black T-shirt Anime [Zero Two] Design</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="image/PSHOP4.webp" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₱ 150<span>₱200</span></div>
                                    <div class="bbb_viewed_name"><a href="https://printactics.rf.gd/black-t-shirt-hood-style">Black T-Shirt Hood Style Design</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                <div class="bbb_viewed_image"><img src="image/PSHOP5.webp" alt=""></div>
                                <div class="bbb_viewed_content text-center">
                                    <div class="bbb_viewed_price">₱200</div>
                                    <div class="bbb_viewed_name"><a href="https://printactics.rf.gd/anime-jejutsu-kaizen-anime-t-shirt">GOJO" Jejutsu Kaizen Anime Black shirt</a></div>
                                </div>
                                <ul class="item_marks">
                                    <li class="item_mark item_discount">-25%</li>
                                    <li class="item_mark item_new">new</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               </div> 
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var viewedSlider = $('.bbb_viewed_slider');
    
    if (viewedSlider.length) {
        viewedSlider.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 6000,
            nav: false,
            dots: false,
            responsive: {
                0: { items: 1 },
                575: { items: 2 },
                768: { items: 3 },
                991: { items: 4 },
                1199: { items: 6 }
            }
        });

        var prev = $('.bbb_viewed_prev');
        var next = $('.bbb_viewed_next');
        
        if (prev.length) {
            prev.on('click', function() {
                viewedSlider.trigger('prev.owl.carousel');
            });
        }

        if (next.length) {
            next.on('click', function() {
                viewedSlider.trigger('next.owl.carousel');
            });
        }
    }
});

</script>



<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Rubik:300,400,500,700,900');

* {
    margin: 0;
    padding: 0;
    -webkit-font-smoothing: antialiased;
    -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    text-shadow: rgba(0, 0, 0, .01) 0 0 1px
}

body {
    font-family: 'Rubik', sans-serif;
    font-size: 14px;
    font-weight: 400;
    background: #eff6fa;
    color: #000000
}

div {
    display: block;
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}




.bbb_viewed {
    padding-top: 51px;
    padding-bottom: 60px;
    background: #eff6fa
}

.bbb_main_container{
        background-color: #fff;
   padding: 11px;
}

.bbb_viewed_title_container {
    border-bottom: solid 1px #dadada
}

.bbb_viewed_title {
        margin-bottom: 16px;
   margin-top: 8px;

}

.bbb_viewed_nav_container {
    position: absolute;
    right: -5px;
    bottom: 14px
}

.bbb_viewed_nav {
    display: inline-block;
    cursor: pointer
}

.bbb_viewed_nav i {
    color: #dadada;
    font-size: 18px;
    padding: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.bbb_viewed_nav:hover i {
    color: #606264
}

.bbb_viewed_prev {
    margin-right: 15px
}

.bbb_viewed_slider_container {
    padding-top: 13px;
}

.bbb_viewed_item {
    width: 100%;
    background: #FFFFFF;
    border-radius: 2px;
    padding-top: 25px;
    padding-bottom: 25px;
    padding-left: 30px;
    padding-right: 30px
}

.bbb_viewed_image {
        width: 150px;
   height: 150px;
}

.bbb_viewed_image img {
    display: block;
    max-width: 100%
}

.bbb_viewed_content {
    width: 100%;
    margin-top: 25px
}

.bbb_viewed_price {
    font-size: 16px;
    color: #000000;
    font-weight: 500
}

.bbb_viewed_item.discount .bbb_viewed_price {
    color: #df3b3b
}

.bbb_viewed_price span {
    position: relative;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0, 0, 0, 0.6);
    margin-left: 8px
}

.bbb_viewed_price span::after {
    display: block;
    position: absolute;
    top: 6px;
    left: -2px;
    width: calc(100% + 4px);
    height: 1px;
    background: #8d8d8d;
    content: ''
}

.bbb_viewed_name {
    margin-top: 3px
}

.bbb_viewed_name a {
    font-size: 14px;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.bbb_viewed_name a:hover {
    color: #0e8ce4
}

.item_marks {
    position: absolute;
    top: 18px;
    left: 18px
}

.item_mark {
    display: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 36px;
    text-align: center
}

.item_discount { 
    background: #df3b3b;
    margin-right: 5px
}

.item_new {
    background: #0e8ce4
}

.bbb_viewed_item.discount .item_discount {
    display: inline-block
}

.bbb_viewed_item.is_new .item_new {
    display: inline-block
}

</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <!-- FOOTER -->
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
          <h3>Email</h3>
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
        <div class="designby">
          Design by Print Tactics Team
        </div>
        <div class="developer">
          Dev by Print Tactics Team
        </div>
      </div>
    </div>
  </div>
</footer>
  
  
  
  

</body>
</html>
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
