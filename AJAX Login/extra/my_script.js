// JavaScript Document
$("button#submit").click( function(){
	if($("#username").val() == "" || $("#password").val() == "")
	$("div#ack").html("please enter the username and password");
	else
			$.post($("#myform").attr("action"),
				   $("#myform :input").serializeArray(),
				   function(data) {
					   		$("div#ack").html(data);
									});
			$("#myform").submit(function(){
			return false;
					   });
	

});