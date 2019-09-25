<!--======================================-->
<?php 
   include 'header.php'; 
   ?>
<!--===================================== -->

<style type="text/css">
   body {
   background-image: url("images/white.png"); 
   background-color:#EAFAF1;
   }
</style>


<!-- ========================================-->

<section>
   <div>
    <!--=========title============-->  
      <div>
         <p class="title_bot">Meet your new bot!</p>
      </div>
    <!--=========================== -->
    
      <div class="content_bot">
         
         <img src="images/BOT_96_2x.png" class="robot_1 wow tada" data-wow-delay="800ms" data-wow-duration="1.8s">
     <div class="text_bot wow bounceIn" data-wow-delay="900ms" data-wow-duration="1.8s">
         <p>Hi! I'm your new Bot!<br>Let's get started on the customization...</p>
     </div>    
<div class="clearfix"> </div>
         <img src="images/BOT_96_2x.png" class="robot_2 wow tada" data-wow-delay="900ms" data-wow-duration="1.8s"> 
      <div class="text_bot wow bounceIn" data-wow-delay="1000ms" data-wow-duration="1.8s">   
         <p>First, I will need to know what your store is. Please send me a link of your Facebook store and let's get started!</p>
      </div>

      <hr>

      <div class= "reply">
         <span>Your reply:</span><br>
         <textarea placeholder="New reply goes here....."></textarea>
         <button class="send wow pulse" data-wow-delay="900ms" data-wow-duration="1.8s">Send</button>
      </div>
     </div> 
   <!--====================================-->  
      
      <div class="bottom">
         <p>I don't know how to set this up...<br>Take me to a classic setup process.</p><br>
      </div>
      <div class="classic">   
         <a href="classicSteps.php">Classic setup</a>
      </div>
   </div>
</section>

<!-- ======================== End Footer =============================== -->
<?php include 'footer.php'; ?>