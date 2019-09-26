<!-- =================================================== -->
<?php 
   include 'header.php'; 
   ?>
<!-- =================================================== --> 
<style type="text/css">
   body {
   background-image: url("images/white.png"); 
   background-color:#f0f9ff;
   }
</style>
<!--==============================================================-->
<section>
   <div>
      <!--============title==========================-->
      <div>
         <p class= "title_classicStep2">Awesome! Meet your new bot!</p>
      </div>
      <!--=======================================-->
      <div class="content_classicStep2">
         <div class="stepss">
            <p class="wow bounceIn" data-wow-delay="600ms" data-wow-duration="1.8s"><span>1</span></p>
            <p class="active_step wow bounceIn" data-wow-delay="700ms" data-wow-duration="1.8s"><span>2</span></p>
            <p class="wow bounceIn" data-wow-delay="800ms" data-wow-duration="1.8s"><span>3</span></p>
            <p class="wow bounceIn" data-wow-delay="900ms" data-wow-duration="1.8s"><span>4</span></p>
         </div>

<p class="go wow bounceIn" data-wow-delay="1000ms" data-wow-duration="1.8s"><span>Go live!</span></p>

         <div class="clearfix"></div>
         <div class="bot_status2">
            <p class="wow bounceIn" data-wow-delay="800ms" data-wow-duration="1.8s">Well done!<br> Customization at 40%</p>
         </div>
         <img src="images/BOT_40_percent.png" class="wow tada" data-wow-delay="800ms" data-wow-duration="1.8s">
         <p class="subtitle_classicStep2 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">Tell me about language <br>and your page...</p>
         <div>
            <form class="details2" action="step3.php" method="post">
               <p class="lang_details wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">What's the Main Language for your bot?</p>
               <select class="language wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">
                  <option value ="">English</option>
                  <option value ="">Arabic</option>
                  <option value ="">Germany</option>
                  <option value ="">Frensh</option>
                  <option value ="">Korean</option>
               </select>
               <p class="describe_buss wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">How would you like me to describe the Business<br> to your new customers? </p>
               <textarea> </textarea>
               <button class= "next_step2">Next step</button> 
            </form>
         </div>
         <div>
         <a href="#" class="save_page2">Save & Exit</a>       
         </div>
   </div>
</section>
<!-- ======================== End Footer =============================== -->
<?php include 'footer.php'; ?>