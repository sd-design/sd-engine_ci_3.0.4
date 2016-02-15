$(document).ready(function() {

$("#out").on('click','.full_out',function() {
	if($(".full_out").prop("checked") == true) { 
$("#logout").attr("href", "/user/logout/?full_out_on=on");
}
else {
$("#logout").attr("href", "/user/logout/?full_out_on=off");

}
	});
});