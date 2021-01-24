jQuery(document).ready(function($) {
  "use strict";
  //Contact
  $('form.sendData-form').submit(function() {
  var str = $(this).serialize();
   $.ajax({
      type: "GET",
      url: "sendData.php",
      data: str,
      success: function(msg) {
		  popUpText(msg);
	  }
   });
    return false;
  });

});
function popUpText(messg)
{
    console.log(messg);
	//$(this).find("input, textarea").val("");
	$("#messageFile").animate({
		height: '+=72px'
	}, 300);
		  if(messg == "OK"){
			  $('<div class="alert alert-success">MESSAGE SENT!</div>').hide().appendTo('#response').fadeIn(1000);  
		  }
		  else{ 
			$('<div class="alert alert-danger">FAILED TO SEND</div>').hide().appendTo('#response').fadeIn(1000);  
		  }  
	$(".alert").delay(3000).fadeOut(
		  "normal",
		function(){
			$(this).remove();
		});
	$("#messageFile").delay(4000).animate({
		height: '-=72px'
	}, 300);
}
