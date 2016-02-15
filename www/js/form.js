/* форма записи на странице обратного отсчета - старая версия */
var main = function() {
    
$('.btn').click(function() {
        var post = $('.status-box').val();
	$('<li>').text('Спасибо что записались').prependTo('.posts');
	$('.counter').text('160');
	$('.btn').addClass('disabled'); 
	$('.posts').children('li').fadeOut(2500);
	
		
	var formData = $("#sms_form").serializeArray();
var URL = $("#sms_form").attr("action");
	$.post(URL,formData,
    function(data, textStatus, jqXHR)
    {
       //data: Data from server.    
    }).fail(function(jqXHR, textStatus, errorThrown) 
    {
 
    });
	

	
	
  });
    $('.status-box').keyup(function() {
       
    if(charactersLeft < 0) {
    $('.btn').addClass('disabled'); 
  }
  else if(charactersLeft == 160) {
    $('.btn').addClass('disabled');
  }
  else {
    $('.btn').removeClass('disabled');
  }
  });
  
 
  
};

$('.btn').addClass('disabled');
$(document).ready(main);
