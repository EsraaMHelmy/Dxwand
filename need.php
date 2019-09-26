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

<!-- =================================================== -->

<section>
	<div>
		<!--=============title=============================-->
		<div>
			<p class="title_need">What matters most to you?</p>
		</div>
	<!--======================================-->
		<div class="content_need">
			<p class="subtitle_need"> Please tell us what you need most help with:</p>
			<div>
				<div class="increase">
					<span class= "text_increase">Increase:</span>
					<input type="radio" name="a" value="Sales & Response time" checked="checked"><p>Sales & Response time</p>
				</div>
				<div class="manage">
					<span class= "text_manage">Manage:</span>
					<input type="radio" name="a" value="Leads & Budget"><p>Leads & Budget</p>
				</div>
				<div class="promote">
					<span class= "text_promote">Promote:</span>
					<input type="radio" name="a" value="Brand"><p>Brand</p>
				</div>
				<button class="next_step_need"> Next Step</button>
			</div>
			

		</div>
		<div>
			<span class= "bottom_need">
				We use this to optimize your bot. <br>
				Don't worry, it will not increase your subscription.			
			</span>
		</div>
	</div>

</section>

<!-- ======================== End Footer =============================== -->
<?php include 'footer.php'; ?>