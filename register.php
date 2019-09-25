<!-- =================================================== -->
<?php 
   include 'header.php'; 
   ?>
<!-- =================================================== --> 

<style type="text/css">
   body {
   background-image: url("images/white.png"); 
   background-color:#EAFAF1;
   }
</style>

<!-- =================================================== -->
<section class= "content_reg">
   <div class="tables">
      <div class="setup">
         <p class="wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">Getting you set up</p>
      </div>
      <div class="blue_table wow fadeIn" data-wow-delay="800ms" data-wow-duration="1.8s">
         <div>
            <p class="email"> Use my Email account </p>
            <form class="register" action="NewBot.php"> 
               <span>Name </span>
               <br><input type="text" placeholder="Carmin Baro"> <br>
               <span> Email </span> 
               <br><input type="email"  placeholder="carmin@carminsplayground.com"> <br>
               <span> Password </span> 
               <br><input type="password" placeholder="password"> <br>
               <button id="create_account">Create account</button>
            </form>
         </div>
      </div>
      <div class="white_table wow fadeIn" data-wow-delay="1000ms" data-wow-duration="1.8s">
         <div>
            <span class="facebook">Use my facebook account</span>
            <img src="images/signup_with_FB_2x.png" class="fb_img">
         </div>
         <div>
            <span class="shopify">Use my shopify account</span>
            <img src="images/signup_with_shopify_2x.png" class="shopify_img">
         </div>
      </div>
   </div>
</section>

<!--================footer=======================-->
<?php include 'footer.php'; ?>
<!-- =================================--> 