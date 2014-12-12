
$(document).ready(function()
{
$("#submit").click(function()
{
	$.post( $("#myForm").attr("action"),$("#myForm : input").serializeArray(),function(info)
{
	$("#error_message").empty();
	$("#error_message").html(info);

});

$("#myForm").submit(function()
{
	return false;
})



})
})
