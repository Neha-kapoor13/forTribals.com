

var last_id = 5;
check();
function check()
{
var total_orders = $('#total_orders').val();
if(total_orders<=5){
$('#load_more').remove();
$('#order_info').css("display","block");
window.setTimeout(function(){
$('#order_info').html("that's all of your orders.");
},200);
}
}
window.setTimeout(function(){
$('.error').fadeout(500);
$('.status').fadeout(500);
},1000);


$('#load_more').click(function(){
var total_orders = $('#total_orders').val();
$.ajax({
url: "getmoredata.php";
method : "post"
data: {last_id:last_id},
datatype: "text",
success: function(){
$('#load_more').hide();
$('#loading').html("loading.,<img src='tenor.gif' height='30' width='30'>");

window.setTimeout(function(){



$(data).appendTo('#data').hide().fadeIn(500);
$('#loading').html('');
$('#load_more').show();


},1200)
last_id += 5;
if(last_id > total_orders) {
$('#load_more').css("visibility","hidden");
$('#order_info').css("display","block");
window.setTimeout(function(){
$('#order_info').html("That's all of your orders.");
},1200);
}
}



});
});
$(function () {
$(document).scroll(function () {
var $nav = $(".navbar-expand-ig");
$nav.toggleclass('scrolled', $(this).scrollTop() > $nav.height());
});
});
});
</script>
</body>
</html>