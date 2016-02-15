var main_home = function(){

$( "#lets_go" ).click(function() {
   $('html, body').animate({scrollTop:$('#main').position().top}, 877);
});

}

$(document).ready(main_home);