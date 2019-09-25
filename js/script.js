$(window).ready(function () {
	$('#preloader').fadeOut('slow', function () {
		$(this).remove();
	});
});


new WOW().init();


var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});



// $(document).ready(function(){
//   $('#more_details').click(function(){
//     $('div.more_details_hidden').fadeIn("");
//   });
// });

  $("#more_details_hidden").hide();
$(document).ready(function(){
  $("#more_details").click(function(){
    $("#more_details_hidden").fadeIn();
    $(".hide_text").hide();
  });
});



$("#add_more").click(function(){
   $(".more_ques").append('<hr><br><span class="q">Q:</span><input type="text" name="text" class="q_quest"><br><span class="r">A:</span><input type="text" name="text" class="r_resp">');
});