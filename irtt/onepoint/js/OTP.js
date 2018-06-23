$(document).ready(function(){
	$("#otp").hide();
	$("error_an").hide();
	var otp = true;
	var error_an = true;
	$("#submit").focusout(function(){
		check_an();
		
	});
	function check_an(){
		var len = $("#aadhaar_no").val().length;
		alert("hii");
		var re = /^[0-9]+$/;
		if(len < 1 ){
			$("error_an").html("Enter the Aadhar Number");
			$("error_an").show();
			error_an = true;
		}
		else if(!re.test($("#aadhaar_no").val())){
			$("error_an").html("12 Digit Aadhar Number");
			$("error_an").show();
			error_an = true;
		}
		else{
			
			error_an = false;
		}
	}
	
	

});