$(document).ready(function(){
  $('#show-login-form').click(function(){
    $('.modal-window').fadeIn();
  });
  $(this).keydown(function(e){
  	if(e.keyCode == 27)
  	{
  		$('.modal-window').fadeOut();
  	}
  })
})
