$(document).ready(function(){
	$("#an").attr("readonly",true);
	
	alert("hii");
	$("#password_error_msg").hide();
	$("#Rpassword_error_msg").hide();
	$("#email_error_msg").hide();

	
	var password_error = true;
	var Rpassword_error = true;
	var email_error = true;
	
	$("#password").focusout(function(){
		check_password();
		alert("Start");
	});
	
	$("#Rpassword").focusout(function(){
		check_Rpassword();
	});
	$("#email").focusout(function(){
		check_email();
	});
	
	
	$("#insert").submit(function(){
			check_password();
			check_Rpassword();
			check_email();
			if(password_error == false &&
		Rpassword_error == false &&
		email_error == false ){
			$("#submit_error_msg").hide();
			return true;
		}
		$("#submit_error_msg").html("Error !!!. Fill completely!!!");
		$("#submit_error_msg").show();
		return false;
	}
	function check_password(){
		var len = $("#password").val().length;
		//alert(len);
		var re = var re = /^[a-zA-Z.,;:|\\\/~!@#$%^&*_-{}\[\]()<>? ]+$/;
		if(len < 8 || len > 15){
			$("#password_error_msg").html("Password should be 7 or 8 Letters");
			$("#password_error_msg").show();
			password_error = true;
		}
		else if (!re.test($("#rollno").val())) {
			$("#password_error_msg").html("Some Special char are not Allowed");
			$("#password_error_msg").show();
			password_error = true;		
		}
		else {
			$("#password_error_msg").hide();
			password_error = false;
		}
		
	}
	function check_Rpassword(){
		
		var p = $("#password").val();
		var r = $("#Rpassword").val();
		//alert(len);
		var re = var re = /^[a-zA-Z.,;:|\\\/~!@#$%^&*_-{}\[\]()<>? ]+$/;
		if(p != r ){
			$("#Rpassword_error_msg").html("Some Special char are not Allowed");
			$("#Rpassword_error_msg").show();
			Rpassword_error = true;		
		}
		
		else {
			$("#Rpassword_error_msg").hide();
			Rpassword_error = false;
		}
		
	}
	function check_email(){
		var len = $("#email").val().length;
		//alert(len);
		var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		if (!re.test($("#email").val())) {
			$("#email_error_msg").html("Syntax error !!!");
			$("#email_error_msg").show();
			email_error = true;			
		}
		else {
			$("#email_error_msg").hide();
			email_error = false;
		}
	}
});