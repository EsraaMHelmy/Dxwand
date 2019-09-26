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
			<p class= "title_classicStep3">Awesome! Meet your new bot!</p>
		</div>

				<!--=======================================-->

		<div class="content_classicStep3">
		<div class="stepss">
            <p class="wow bounceIn" data-wow-delay="600ms" data-wow-duration="1.8s"><span>1</span></p>
            <p class="wow bounceIn" data-wow-delay="700ms" data-wow-duration="1.8s"><span>2</span></p>
            <p class="active_step wow bounceIn" data-wow-delay="800ms" data-wow-duration="1.8s"><span>3</span></p>
            <p class="wow bounceIn" data-wow-delay="900ms" data-wow-duration="1.8s"><span>4</span></p>
         </div>
         
         <p class="go wow bounceIn" data-wow-delay="1000ms" data-wow-duration="1.8s"><span>Go live!</span></p>

         <div class="clearfix"></div>
			<div class="bot_status3">
					<p class= "wow bounceIn" data-wow-delay="800ms" data-wow-duration="1.8s">Great!<br> Customization at 60%</p>
			</div>

				    <img src="images/BOT_60_percent.png" class="wow tada" data-wow-delay="800ms" data-wow-duration="1.8s">
				    <p class="subtitle_classicStep3 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1.8s">Choose your bot's replies<br>to customer questions</p>
		 	<div>

				<form class="details3" action="step4.php" method="post">
				<p class="quest_respond">When a customer asks a question, the Bot will respond<br> just like you would.</p>
				<p class="cust">Increase your sales chances by up to 80% just by adding<br> your own custom dialouges!</p>
				<p class="examp">Here's an example:</p>


				<span class="q">Q:</span>
				<input type="text" name="text" class="q_quest">
<!--				Do you provide props and settings for family<br> photos shoots? -->
<br>	

				<span class="r">A:</span>
				<input type="text" name="text" class="r_resp">
<!--			Yes, our studio will help you find the best spot and lightining, and help you to get the best family photo! -->

<br>		
	<p class="common_quest">Give it a go!What are the most common questions your<br> customers ask and you would like to respond to?</p>


						<div class="more_ques">

					<span class="q">Q:</span>
				<input type="text" name="text" class="q_quest">
<br>	

				<span class="r">A:</span>
				<input type="text" name="text" class="r_resp">

									
			</div>

			<div class="add_more">
				<a id="add_more"><i class="fas fa-plus"></i> </a>
			</div>
			<div>
				<p class="fit_business">Choose from ready-made questions and answers<br> that fit your Business.</p>

			</div>
				<a href="#" class="dialogues">See dialogues</a>

			<button class= "next_step3"> Next step </button> 
			
		    </form>
		</div>
		<div><a href="#" class="save_page3">Save & Exit</a></div>
	  </div>
	 </div>
	</section>	
<!-- ======================== End Footer =============================== -->
<?php include 'footer.php'; ?>