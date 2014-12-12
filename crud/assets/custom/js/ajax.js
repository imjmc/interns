$('.login_menu').click(function()
{
	var href = $(this).attr('href');
	$('#show_page').load(href);
	
	return false;
})

$('#signup_link').click(function()
{
	var href = $(this).attr('href');
	$('#show_page').load(href);
	
	return false;
})