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
<!-- =================================================== -->
<section>
   <div>
       <!--============title==========================-->
      <div>
         <p class= "title_classicStep1">Awesome! Meet your new bot!</p>
      </div>
      <!--=======================================-->
      <div class="content_classicStep1">
         <div class="stepss">
            <p class="active_step wow bounceIn" data-wow-delay="600ms" data-wow-duration="1.8s"><span>1</span></p>
            <p class="wow bounceIn" data-wow-delay="700ms" data-wow-duration="1.8s"><span>2</span></p>
            <p class="wow bounceIn" data-wow-delay="800ms" data-wow-duration="1.8s"><span>3</span></p>
            <p class="wow bounceIn" data-wow-delay="900ms" data-wow-duration="1.8s"><span>4</span></p>
         </div>
         <p class="go wow bounceIn" data-wow-delay="1000ms" data-wow-duration="1.8s"><span>Go live!</span></p>

         <div class="clearfix"></div>
         <div class="bot_status">
            <p class="wow bounceIn" data-wow-delay="800ms" data-wow-duration="1.8s">Well done!<br> Customization at 20%</p>
         </div>
         <img src="images/BOT_20_percent.png" class="wow tada" data-wow-delay="800ms" data-wow-duration="1.8s">
         <p class="subtitle_classicStep1 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">Let's start with the details <br>of your business...</p>
         <div class="">
            <form class="details" action="step2.php" method="post">
               <p class="name_business wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">What's the name of the Business that i'll promote?</p>
               <input type="text" name="text" class="wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">
               <p class="business_location wow fadeInUp" data-wow-delay="820ms" data-wow-duration="1.8s">Where is the Business established?</p>
               <input type="text" name="text" class="wow fadeInUp" data-wow-delay="820ms" data-wow-duration="1.8s">
               <p class="b_currency wow fadeInUp" data-wow-delay="820ms" data-wow-duration="1.8s">What currency are you using?</p>
               <select class="currency wow fadeInUp" data-wow-delay="820ms" data-wow-duration="1.8s">
                  <option value ="">USD</option>
                  <option value ="">EUR</option>
                  <option value ="">EGP</option>
               </select>



               <div class="hide_text">
                  <p class="info_business">Want to add more information about your Business?</p>
                  <a id="more_details">Add more details</a>
               </div>
               


               <div id="more_details_hidden">
                  <hr>
                  <p class="title_details">Add more business details:</p>
                  <p class="bus_details">What's your website? <br> If you don't have one, use your Facebook page link</p>
                  <input type="text" name="text" class="fb_text">
                  <p class="bus_details">Business email?<br> Please provide your email address here</p>
                  <input type="email" name="email" class="mail_addr">
                  <p class="bus_details">Phone number?<br> Please provide your sales support phone number here</p>
                  <input type="number" name="number" class="phone_num">
               </div>
               <button class="next_step_classic">Next step</button>
            </form>
         </div>
         <a href="#" class="save_page">Save & Exit</a>
      </div>
   </div>
</section>
<!-- ======================== End Footer =============================== -->
<?php include 'footer.php'; ?>