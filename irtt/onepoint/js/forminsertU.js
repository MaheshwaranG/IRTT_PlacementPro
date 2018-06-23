$(document).ready(function(){
	$("#address_error_msg").hide();
	$("#pincode_error_msg").hide();
	
	$("#cgpa_error_msg").hide();
	
	$("#SA_error_msg").hide();
	$("#HA_error_msg").hide();
	$("#phone_error_msg").hide();
	$("#Aphone_error_msg").hide();
	$("#email_error_msg").hide();
	$("#status_error_msg").hide();
	$("#submit_error_msg").hide();
	
	$("#company_error_msg").hide();
	$("#designation_error_msg").hide();
	$("#package_error_msg").hide();
	$("#location_error_msg").hide();
	$("#bond_error_msg").hide();
	$("#course_error_msg").hide();
	$("#PGcollege_error_msg").hide();
	$("#BM_error_msg").hide();
	
	
	$("#company").attr("readonly",true);
	$("#designation").attr("readonly",true);
	$("#package").attr("readonly",true);
	$("#location").attr("readonly",true);
	$("#bond").attr("readonly",true);
	$("#course").attr("readonly",true);
	$("#PGcollege").attr("readonly",true);
	$("#BM").attr("readonly",true); 
	
	var address_error = true;
	var pincode_error = true;
	
	var cgpa_error = true;
	
	var SA_error = true;
	var HA_error = true;
	var phone_error = true;
	var Aphone_error = true;
	var email_error = true;
	var status_error = true;
	var company_error = true;
	var designation_error = true;
	var package_error = true;
	var location_error = true;
	var bond_error = true;
	var course_error = true;
	var PGcollege_error = true;
	var BM_error = true;
	
	$("#address").focusout(function(){
		//alert("start");
		
		check_address();
	});
	
	$("#pincode").focusout(function(){
		check_pincode();
	});
	
	$("#cgpa").focusout(function(){
		check_cgpa();
	});
	
	$("#SA").focusout(function(){
		check_SA();
	});
	$("#HA").focusout(function(){
		check_HA();
	});
	
	$("#phone").focusout(function(){
		check_phone();
	});
	$("#Aphone").focusout(function(){
		check_Aphone();
	});
	
	
	$("#email").focusout(function(){
		check_email();
	});
	$("#status").focusout(function(){
		check_status();
	});
	
	$("#company").focusout(function(){
		check_company();
	});
	$("#designation").focusout(function(){
		check_designation();
	});

	$("#package").focusout(function(){
		check_package();
	});
	$("#location").focusout(function(){
		check_location();
	});
	
	
	$("#bond").focusout(function(){
		check_bond();
	});
	$("#course").focusout(function(){
		check_course();
	});
	$("#PGcollege").focusout(function(){
		check_PGcollege();
	});
	$("#BM").focusout(function(){
		check_BM();
		
	});
	
	
	$("#reset").focusin(function(){
	$("#address_error_msg").hide();
	$("#pincode_error_msg").hide();
	
	$("#cgpa_error_msg").hide();
	
	$("#SA_error_msg").hide();
	$("#HA_error_msg").hide();
	$("#phone_error_msg").hide();
	$("#Aphone_error_msg").hide();
	$("#email_error_msg").hide();
	$("#status_error_msg").hide();
	
	$("#submit_error_msg").hide();
	});
	
	$("#insert").submit(function(){
		check_address();
		check_pincode();
		check_cgpa();
		check_SA();
		check_HA();
		check_phone();
		check_Aphone();
		check_email();
		check_status();
		check_company();
		check_designation();
		check_package();
		check_location();
		check_bond();
		check_course();
		check_PGcollege();
		check_BM();
	/*	alert(
		address_error +"\n"+
		pincode_error +"\n"+
		
		cgpa_error +"\n"+
		
		SA_error +"\n"+
		HA_error +"\n"+
		phone_error+"\n"+
		Aphone_error +"\n"+
		email_error +"\n"+
		status_error +"\n"+
		company_error+"\n"+
		designation_error+"\n"+
		package_error+"\n"+
		location_error+"\n"+
		bond_error+"\n"+
		course_error+"\n"+
		PGcollege_error+"\n"+
		BM_error
		);         */
		if(
		address_error == false &&
		pincode_error == false &&
		
		cgpa_error == false &&
		
		SA_error == false &&
		HA_error == false &&
		phone_error == false &&
		Aphone_error == false &&
		email_error == false &&
		status_error == false  &&
		company_error == false &&
		designation_error == false &&
		package_error == false &&
		location_error == false &&
		bond_error == false &&
		course_error == false &&
		PGcollege_error == false &&
		BM_error == false 
		){
			$("#submit_error_msg").hide();
			return true;
		}
		$("#submit_error_msg").html("Error !!!. Fill completely!!!");
		$("#submit_error_msg").show();
		return false;
	});
	
	
	function check_BM(){
		var len = $("#BM").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		if(sel != 'BM' ){
			$("#BM_error_msg").hide();
			BM_error = false;
		}
		else if(len < 3 ){
			$("#BM_error_msg").html("Fill this blank");
			$("#BM_error_msg").show();
			BM_error = true;
		}
		else if(!re.test($("#BM").val())){
			$("#BM_error_msg").html("Special characters are not Allowed, use Capital");
			$("#BM_error_msg").show();
			BM_error = true;
		}
		else{
			$("#BM_error_msg").hide();
			BM_error = false;
		}
	}
	function check_PGcollege(){
		var len = $("#PGcollege").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("PGCollege");
		if(sel != 'HS' ){
			$("#PGcollege_error_msg").hide();
			PGcollege_error = false;
		}
		else if(len < 3 ){
			$("#PGcollege_error_msg").html("Fill this blank");
			$("#PGcollege_error_msg").show();
			PGcollege_error = true;
		}
		else if(!re.test($("#PGcollege").val())){
			$("#PGcollege_error_msg").html("Special characters are not Allowed, use Capital");
			$("#PGcollege_error_msg").show();
			PGcollege_error = true;
		}
		else{
			$("#PGcollege_error_msg").hide();
			PGcollege_error = false;
		}
	}
	
	function check_course(){
		var len = $("#course").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("Courge");
		if(sel != 'HS' ){
			$("#course_error_msg").hide();
			course_error = false;
		}
		else if(len < 3 ){
			$("#course_error_msg").html("Fill this blank");
			$("#course_error_msg").show();
			course_error = true;
		}
		else if(!re.test($("#course").val())){
			$("#course_error_msg").html("Special characters are not Allowed, use Capital");
			$("#course_error_msg").show();
			course_error = true;
		}
		else{
			$("#course_error_msg").hide();
			course_error = false;
		}
	}
	
	function check_bond(){
		var len = $("#bond").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("bond");
		if(sel != 'Y' ){
			$("#bond_error_msg").hide();
			bond_error = false;
		}
		else if(!re.test($("#bond").val())){
			$("#bond_error_msg").html("Special characters are not Allowed, use Capital");
			$("#bond_error_msg").show();
			bond_error = true;
		}
		else{
			$("#bond_error_msg").hide();
			bond_error = false;
		}
	}
	
	
	
	function check_location(){
		var len = $("#location").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("Location");
		if(sel != 'Y' ){
			$("#location_error_msg").hide();
			location_error = false;
		}
		
		else if(!re.test($("#location").val())){
			$("#location_error_msg").html("Special characters are not Allowed, use Capital");
			$("#location_error_msg").show();
			company_error = true;
		}
		else{
			$("#location_error_msg").hide();
			location_error = false;
		}
	}
	
	
	function check_package(){
		var len = $("#package").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("Package");
		if(sel != 'Y' ){
			$("#package_error_msg").hide();
			package_error = false;
		}
		else if(len < 1 ){
			$("#package_error_msg").html("Enter salary Package");
			$("#package_error_msg").show();
			package_error = true;
		}
		else if(!re.test($("#package").val())){
			$("#package_error_msg").html("Special characters are not Allowed, use Capital");
			$("#package_error_msg").show();
			package_error = true;
		}
		else{
			$("#package_error_msg").hide();
			package_error = false;
		}
	}
	
	function check_designation(){
		
		var len = $("#designation").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("Designation");
		if(sel != 'Y'){
			$("#designation_error_msg").hide();
			designation_error = false;
		}
		else if(len < 3 ){
			$("#designation_error_msg").html("Designation length between 3(min) to 25(max) ");
			$("#designation_error_msg").show();
			designation_error = true;
		}
		else if(!re.test($("#designation").val())){
			$("#designation_error_msg").html("Special characters are not Allowed, use Capital");
			$("#designation_error_msg").show();
			designation_error = true;
		}
		else{
			$("#designation_error_msg").hide();
			designation_error = false;
		}
	}
	
	
	function check_company(){
		var len = $("#company").val().length;
		var sel = $('#status option:selected').val();
		var re = /^[a-zA-Z0-9._\-/.,@()\s ]+$/;
		//alert("Company");
		if(sel != 'Y' ){
			$("#company_error_msg").hide();
			company_error = false;
		}
		else if(len < 3 ){
			$("#company_error_msg").html("Company Name length between 3(min) to 25(max) ");
			$("#company_error_msg").show();
			company_error = true;
		}
		else if(!re.test($("#company").val())){
			$("#company_error_msg").html("Special characters are not Allowed, use Capital");
			$("#company_error_msg").show();
			company_error = true;
		}
		else{
			$("#company_error_msg").hide();
			company_error = false;
		}
	}
	
	
	function check_status(){
		/*check_company();
		check_designation();
		check_package();
		check_location();
		*/
		var sel = $('#status option:selected').val();
		
		$("#company").attr("readonly",true);
		$("#designation").attr("readonly",true);
		$("#package").attr("readonly",true);
		$("#location").attr("readonly",true);
		$("#bond").attr("readonly",true);
		$("#course").attr('readonly',true);
		$("#PGcollege").attr("readonly",true);
		$("#BM").attr("readonly",true);  
		if(sel == "")
		{
		$("#status_error_msg").html("Please select Your Option");
		$("#status_error_msg").show();
		status_error = true;
		}
		else{
			$("#status_error_msg").hide();
			status_error = false;
			if(sel == 'Y'){
				$("#company").attr('readonly',false);
				$("#designation").attr("readonly",false);
				$("#package").attr("readonly",false);
				$("#location").attr("readonly",false);
				$("#bond").attr("readonly",false);
				 company_error = true;
				 designation_error = true;
				package_error = true;
				location_error = true;
				bond_error = true;
				check_company();
				check_designation();
				check_package();
				check_location();
				check_bond();
				
				
			}
			else{
				$("#company").attr('readonly',true);
				$("#designation").attr("readonly",true);
				$("#package").attr("readonly",true);
				$("#location").attr("readonly",true);
				$("#bond").attr("readonly",true);
				company_error = false;
				designation_error = false;
				package_error = false;
				location_error = false;
				bond_error = false;
				$("#company_error_msg").hide();
				$("#designation_error_msg").hide();
				$("#package_error_msg").hide();
				$("#location_error_msg").hide();
				$("#bond_error_msg").hide();
				$("#company").val("");
				$("#designation").val("");
				$("#package").val("");
				$("#location").val("");
				$("#bond").val("");
			}
			if(sel == 'HS'){
				$("#course").attr('readonly',false);
				$("#PGcollege").attr("readonly",false);
				course_error = true;
				PGcollege_error = true;
				check_course();
				check_PGcollege();
		
			}
			else{
				$("#course").attr('readonly',true);
				$("#PGcollege").attr("readonly",true);
				course_error = false;
				PGcollege_error = false;
				$("#course_error_msg").hide();
				$("#PGcollege_error_msg").hide();
				$("#PGCollege").val("");
				$("#course").val("");
				
				
			}
			if(sel == 'BM'){
				$("#BM").attr('readonly',false);
				BM_error = true;
				check_BM();
			}
			else{
				$("#BM").attr("readonly",'readonly');
				BM_error = false;
				$("#BM_error_msg").hide();
				$("#BM").val("");
			}
		}
		
	}
	function check_email(){
		var len = $("#email").val().length;
		//alert(len);
		var re = /^[a-zA-Z0-9._\-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
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
	function check_Aphone(){
		var len = $("#Aphone").val().length;
		//alert(len);
		var re = /^([0-9]{10,10})+$/i;
		if(len < 10 ){
			$("#Aphone_error_msg").html("Need 10 digit Phone number");
			$("#Aphone_error_msg").show();
			phone_error = true;
		}
		else if (!re.test($("#Aphone").val())) {
			$("#Aphone_error_msg").html("Syntax error and Special characters are not Allowed");
			$("#Aphone_error_msg").show();
			Aphone_error = true;			
		}
		else {
			$("#Aphone_error_msg").hide();
			Aphone_error = false;
		}
	}
	function check_phone(){
		var len = $("#phone").val().length;
		//alert(len);
		var re = /^([0-9]{10,10})+$/i;
		if(len < 10 ){
			$("#phone_error_msg").html("Need 10 digit Phone number");
			$("#phone_error_msg").show();
			phone_error = true;
		}
		else if (!re.test($("#phone").val())) {
			$("#phone_error_msg").html("Syntax error and Special characters are not Allowed");
			$("#phone_error_msg").show();
			phone_error = true;			
		}
		else {
			$("#phone_error_msg").hide();
			phone_error = false;
			//alert(len+"final");
		}
	}
	function check_HA(){
		var len = $("#HA").val().length;
		var ha = $("#HA").val();
		var sa = $("#SA").val()
		//alert(len);
		var re = /^([0-9]{1,2})+$/i;
		if(ha < sa){
			$("#HA_error_msg").html("Please Enter correct value <br/>History of Arrear always >= Standing Arrear");
			$("#HA_error_msg").show();
			HA_error = true;
		}
		else if(len > 2 || $("#HA").val() > 48 ){
			$("#HA_error_msg").html("Please Enter correct value like - 2 or 11 ");
			$("#HA_error_msg").show();
			HA_error = true;
		}
		else if (!re.test($("#HA").val())) {
			$("#HA_error_msg").html("Special characters are not Allowed");
			$("#HA_error_msg").show();
			HA_error = true;			
		}
		else {
			$("#HA_error_msg").hide();
			HA_error = false;
		}
	}
	function check_SA(){
		var len = $("#SA").val().length;
		//alert(len);
		var re = /^([0-9]{1,2})+$/i;
		if(len > 2 || $("#SA").val() > 48 ){
			$("#SA_error_msg").html("Please Enter correct value like - 2 or 11 ");
			$("#SA_error_msg").show();
			SA_error = true;
		}
		else if (!re.test($("#SA").val())) {
			$("#SA_error_msg").html("Special characters are not Allowed");
			$("#SA_error_msg").show();
			SA_error = true;			
		}
		else {
			$("#SA_error_msg").hide();
			SA_error = false;
		}
	}
	
	
	function check_cgpa(){
		var len = $("#cgpa").val().length;
		//alert(len);
		var re = /^([0-9]{1,1})+.([0-9]{3,3})+$/i;
		if(len != 5){
			$("#cgpa_error_msg").html("Please Enter like - 8.745 or 7.000 ");
			$("#cgpa_error_msg").show();
			cgpa_error = true;
		}
		else if (!re.test($("#cgpa").val())) {
			$("#cgpa_error_msg").html("Special characters are not Allowed");
			$("#cgpa_error_msg").show();
			cgpa_error = true;			
		}
		else {
			$("#cgpa_error_msg").hide();
			cgpa_error = false;
		}
	}
	
	function check_pincode(){
		var pin = $("#pincode").val();
		var len = $("#pincode").val().length;
		if(isNaN(pin) ){
			$("#pincode_error_msg").html("Enter Numeric PIN CODE only - 638316");
			$("#pincode_error_msg").show();
			pincode_error = true;
		}
		else if(len != 6){
			$("#pincode_error_msg").html("PIN CODE should be SIX digit - 638316");
			$("#pincode_error_msg").show();
			pincode_error = true;
		}
		else{
			$("#pincode_error_msg").hide();
			pincode_error = false;
	}
	}
	
	function check_address(){
		var len = $("#address").val().length;
		//alert(len+"address");
		var re = /^[a-zA-Z0-9 .,(\-)_&@*\/\s]+$/;
		//alert(len+"first");
		if(len < 25 ){
			$("#address_error_msg").html("Address length between 25(min) to 60(max) ");
			$("#address_error_msg").show();
			address_error = true;
			//alert("length error");
		}
		else if(!re.test($("#address").val())){
			$("#address_error_msg").html(" Some Special characters are not Allowed, use Capital");
			$("#address_error_msg").show();
			address_error = true;
			//alert("Rex");
		}
		else{
			$("#address_error_msg").hide();
			address_error = false;
			//alert(len+" final "+);
		}
	}
	
	
});