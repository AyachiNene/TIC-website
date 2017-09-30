
$(document).ready(function(){
	// please input any global js or jQuery code here
	$("#login-button").click(function(){
	  	$("#login-stage").show(500);
	});

	$("#login-stage").click(function(){
		$("#login-stage").hide(500);
	});
});
