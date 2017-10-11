
$(document).ready(function() {
	// please input any global js or jQuery code here
	// login & account part
	$("#login-button").click(function() {
	  	$("#login-stage").show(500);
	});

	$("#login-stage").click(function(e) {
		if($(e.target)[0] == $("#login-stage")[0]) {
			$("#login-stage").hide(500);
		}
	});

	$("#account-button").click(function() {
	  	$("#account-stage").show(500);
	});

	$("#account-stage").click(function(e) {
		if($(e.target)[0] == $("#account-stage")[0]) {
			$("#account-stage").hide(500);
		}
	});

	$("#password").focusout(function(e) {
		var password = $("#password").val();
		var psw_check = $("#psw-check").val();
		console.log(password);
		console.log(psw_check);
		console.log(password != "");
		console.log(psw_check != "");
		console.log(password != psw_check);
		if(password != "" && psw_check != "" && password != psw_check) {
			$(".psw-check-error").show(0);
		}
		else {
			$(".psw-check-error").hide(0);
		}
	});

	$("#psw-check").focusout(function(e) {
		var password = $("#password").val();
		var psw_check = $("#psw-check").val();
		console.log(password);
		console.log(psw_check);
		console.log(password != "");
		console.log(psw_check != "");
		console.log(password != psw_check);
		if(password != "" && psw_check != "" && password != psw_check) {
			$(".psw-check-error").show(0);
		}
		else {
			$(".psw-check-error").hide(0);
		}
	});

});
