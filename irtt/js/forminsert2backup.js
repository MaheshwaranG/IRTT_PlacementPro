$(document).ready(function(){
	$("#rollno_error_msg").hide();
	$("#firstname_error_msg").hide();
	$("#lastname_error_msg").hide();
	$("#branch_error_msg").hide();
	$("#gender_error_msg").hide();
	$("#fathername_error_msg").hide();
	$("#mothername_error_msg").hide();
	$("#address_error_msg").hide();
	$("#pincode_error_msg").hide();
	$("#dob_error_msg").hide();
	$("#cgpa_error_msg").hide();
	$("#yopug_error_msg").hide();
	$("#hsc_error_msg").hide();
	$("#yophsc_error_msg").hide();
	$("#dip_error_msg").hide();
	$("#yopdip_error_msg").hide();
	$("#sslc_error_msg").hide();
	$("#yopsslc_error_msg").hide();
	$("#SA_error_msg").hide();
	$("#HA_error_msg").hide();
	$("#phone_error_msg").hide();
	$("#Aphone_error_msg").hide();
	$("#email_error_msg").hide();
	$("#status_error_msg").hide();
	
	var rollno_error = false;
	var firstname_error = false;
	var lastname_error = false;
	var branch_error = false;
	var gender_error = false;
	var fathername_error = false;
	var mothername_error = false;
	var address_error = false;
	var pincode_error = false;
	var dob_error = false;
	var cgpa_error = false;
	var yopug_error = false;
	var hsc_error = false;
	var yophsc_error = false;
	var dip_error = false;
	var yopdip_error = false;
	var sslc_error = false;
	var yopsslc_error = false;
	var SA_error = false;
	var HA_error = false;
	var phone_error = false;
	var Aphone_error = false;
	var email_error = false;
	var status_error = false;
	
	$("#rollno").focusout(function(){
		check_rollno();
	});
	$("#fn").focusout(function(){
		check_firstname();
	});
	$("#ln").focusout(function(){
		check_lastname();
	});
	$("#branch").focusout(function(){
		check_branch();
	});
	$("#gender").focusout(function(){
		check_gender();
	});
	$("#fathername").focusout(function(){
		check_fathername();
	});
	$("#mothername").focusout(function(){
		check_mothername();
	});
	$("#address").focusout(function(){
		check_address();
		
	});
	
	$("#pincode").focusout(function(){
		check_pincode();
	});
	$("#dob").focusout(function(){
		check_dob();
	});
	$("#cgpa").focusout(function(){
		check_cgpa();
	});
	$("#yopug").focusout(function(){
		check_yopug();
	});
	
	$("#hsc").focusout(function(){
		check_hsc();
	});
	$("#yophsc").focusout(function(){
		check_yophsc();
	});
	$("#dip").focusout(function(){
		check_dip();
	});
	$("#yopdip").focusout(function(){
		check_yopdip();
	});
	$("#sslc").focusout(function(){
		check_sslc();
	});
	$("#yopsslc").focusout(function(){
		check_yopsslc();
	});
	$("#SA").focusout(function(){
		check_SA();
	});
	$("#HA").focusout(function(){
		check_HA();
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
	
	function check_status(){
		var sel = $('#status option:selected').val();
		//alert(sel);
		if(sel == "")
		{
		$("#status_error_msg").html("Please select Your Option");
		$("#status_error_msg").show();
		status_error = true;
		}
		else{
			$("#status_error_msg").hide();
			status_error = false;
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
	function check_Aphone(){
		var len = $("#Aphone").val().length;
		//alert(len);
		var re = /^([0-9]{10,10})+$/i;
		if(len != 10 ){
			$("#Aphone_error_msg").html("Please Enter correct value like - 9988662211");
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
		if(len != 10 ){
			$("#phone_error_msg").html("Please Enter correct value like - 9988662211");
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
	function check_yopsslc(){
		var len = $("#yopsslc").val().length;
		var year = $("#yopsslc").val();
		//alert(len);
		var re = /^([0-9]{4,4})+$/i;
		if(len != 4){
			$("#yopsslc_error_msg").html("Please Enter correct syntax for year like - 2010 ");
			$("#yopsslc_error_msg").show();
			yopsslc_error = true;
		}
		else if(year < 2000 || year > 3000){
			$("#yopsslc_error_msg").html("Wrong Entry. Please check it ");
			$("#yopsslc_error_msg").show();
			yopsslc_error  = true;
		}
		else if (!re.test($("#yopsslc").val())) {
			$("#yopsslc_error_msg").html("Special characters and characters are not Allowed");
			$("#yopsslc_error_msg").show();
			yopsslc_error = true;			
		}
		else {
			$("#yopsslc_error_msg").hide();
			yopsslc_error = false;
		}
	}
	function check_sslc(){
		var len = $("#sslc").val().length;
		//alert(len);
		var re = /^([0-9]{2,2})+([.]{1,1})+([0-9]{2,2})+$/i;
		if(len != 5){
			$("#sslc_error_msg").html("Please Enter like - 87.45 or 70.00 ");
			$("#sslc_error_msg").show();
			sslc_error = true;
		}
		else if (!re.test($("#sslc").val())) {
			$("#sslc_error_msg").html("Syntax error and Special characters are not Allowed");
			$("#sslc_error_msg").show();
			sslc_error = true;			
		}
		else {
			$("#sslc_error_msg").hide();
			sslc_error = false;
		}
	}
	function check_yopdip(){
		var len = $("#yopdip").val().length;
		var year =  $("#yopdip").val();
		//alert(len);
		var re = /^([0-9]{4,4})+$/i;
		if(len != 4){
			$("#yopdip_error_msg").html("Please Enter correct syntax for year like - 2013 ");
			$("#yopdip_error_msg").show();
			yopdip_error = true;
		}
		else if(year < 2000 || year > 3000){
			$("#yopdip_error_msg").html("Wrong Entry. Please check it ");
			$("#yopdip_error_msg").show();
			yopdip_error = true;
		}
		else if (!re.test($("#yopdip").val())) {
			$("#yopdip_error_msg").html("Special characters and characters are not Allowed");
			$("#yopdip_error_msg").show();
			yopdip_error = true;			
		}
		else {
			$("#yopdip_error_msg").hide();
			yopdip_error = false;
		}
	}
	function check_dip(){
		var len = $("#dip").val().length;
		//alert(len);
		var re = /^([0-9]{2,2})+([.]{1,1})+([0-9]{2,2})+$/i;
		if($("#hsc").val()=='-' && $("#dip").val()=='-'){
			$("#dip_error_msg").html("Need Diploma Percentage or 12th Percentage");
			$("#dip_error_msg").show();
			dip_error = true;
		}
		else if($("#dip").val()=='-'){
			$("#yopdip").val("-");
			$("#yopdip").attr("readonly",true);
			$("#yopdip_error_msg").hide();
			yopdip_error = false;
			$("#dip_error_msg").hide();
			dip_error = false;
		}
		else if(len < 1 || len > 5){
			$("#dip_error_msg").html("Please Enter Diploma Percentage like - 89.67 <br/> if you are not attended Diploma fill with '-' ");
			$("#dip_error_msg").show();
			dip_error = true;
		}
		else if (!re.test($("#dip").val())) {
			$("#dip_error_msg").html("Syntax error and Special characters are not Allowed");
			$("#dip_error_msg").show();
			dip_error = true;			
		}
		else {
			$("#dip_error_msg").hide();
			$("#yopdip").val("");
			$("#yopdip").attr("readonly",false);
			//$("#yophsc_error_msg").hide();
			dip_error = false;
		}
	}
	function check_yophsc(){
		var len = $("#yophsc").val().length;
		var year = $("#yophsc").val();
		//alert(len);
		var re = /^([0-9]{4,4})+$/i;
		if($("#hsc").val()=='-' && $("#yophsc").val()=='-'){
			$("#yophsc_error_msg").hide();
			yophsc_error = false;
		}
		else if(len != 4){
			$("#yophsc_error_msg").html("Please Enter correct syntax for year like - 2012 ");
			$("#yophsc_error_msg").show();
			yophsc_error = true;
		}
		else if(year < 2000 || year > 3000){
			$("#yophsc_error_msg").html("Wrong Entry. Please check it ");
			$("#yophsc_error_msg").show();
			yophsc_error = true;
		}
		else if (!re.test($("#yophsc").val())) {
			$("#yophsc_error_msg").html("Special characters and characters are not Allowed");
			$("#yophsc_error_msg").show();
			yophsc_error = true;			
		}
		else {
			$("#yophsc_error_msg").hide();
			yophsc_error = false;
		}
	}
	
	function check_hsc(){
		var len = $("#hsc").val().length;
		//alert(len);
		var re = /^([0-9]{2,2})+([.]{1,1})+([0-9]{2,2})+$/i;
		if($("#hsc").val()=='-'){
			$("#yophsc").val("-");
			$("#yophsc").attr("readonly",true);
			$("#yophsc_error_msg").hide();
			yophsc_error = false;
			$("#hsc_error_msg").hide();
			hsc_error = false;
		}
		else if(len < 1 || len > 5){
			$("#hsc_error_msg").html("Please Enter 12th Percentage like - 89.67 <br/> if you are not attended HSC fill with '-' ");
			$("#hsc_error_msg").show();
			hsc_error = true;
		}
		else if (!re.test($("#hsc").val())) {
			$("#hsc_error_msg").html("Syntax error and Special characters are not Allowed");
			$("#hsc_error_msg").show();
			hsc_error = true;			
		}
		else {
			$("#hsc_error_msg").hide();
			$("#yophsc").val("");
			$("#yophsc").attr("readonly",false);
			//$("#yophsc_error_msg").hide();
			hsc_error = false;
		}
	}
	
	function check_yopug(){
		//$("#yopug").val("hiii");
		var len = $("#yopug").val().length;
		var year = $("#yopug").val();
		//alert(len);
		var re = /^([0-9]{4,4})+$/i;
		if(len != 4){
			$("#yopug_error_msg").html("Please Enter correct syntax for year like - 2017 ");
			$("#yopug_error_msg").show();
			yopug_error = true;
		}
		else if(year < 2000 || year > 3000){
			$("#yopug_error_msg").html("Wrong Entry. Please check it ");
			$("#yopug_error_msg").show();
			yopug_error = true;
		}
		else if (!re.test($("#yopug").val())) {
			$("#yopug_error_msg").html("Special characters are not Allowed");
			$("#yopug_error_msg").show();
			yopug_error = true;			
		}
		else {
			$("#yopug_error_msg").hide();
			yopug_error = false;
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
	function check_dob(){
		var len = $("#dob").val().length;
		//alert(len);
		var re = /^([0-9]{2,2})+(-[0-9]{2,2})+(-[0-9]{4,4})+$/i;
		if(len != 10){
			$("#dob_error_msg").html("Date of Birth length should be like 20-06-1996 ");
			$("#dob_error_msg").show();
			dob_error = true;
		}
		else if (!re.test($("#dob").val())) {
			$("#dob_error_msg").html("Special characters are not Allowed - 20-06-1996");
			$("#dob_error_msg").show();
			dob_error = true;			
		}
		else {
			$("#dob_error_msg").hide();
			dob_error = false;
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
		var re = /^[A-Z0-9 .,()_&@*\/]+$/;
		//alert(len+"first");
		if(len < 25 ){
			$("#address_error_msg").html("Address length between 25(min) to 60(max) ");
			$("#address_error_msg").show();
			address_error = true;
			//alert(len);
		}
		else if(!re.test($("#address").val())){
			$("#address_error_msg").html(" Some Special characters are not Allowed, use Capital");
			$("#address_error_msg").show();
			address_error = true;
			//alert(len);
		}
		else{
			$("#address_error_msg").hide();
			address_error = false;
			//alert(len+"final");
		}
	}
	
	function check_mothername(){
		var len = $("#mothername").val().length;
		
		var re = /^[A-Z ]+$/;
		if(len < 3 ){
			$("#mothername_error_msg").html("Mother Name length between 3(min) to 25(max) ");
			$("#mothername_error_msg").show();
			mothername_error = true;
		}
		else if(!re.test($("#mothername").val())){
			$("#mothername_error_msg").html("Special characters are not Allowed, use Capital");
			$("#mothername_error_msg").show();
			mothername_error = true;
		}
		else{
			$("#mothername_error_msg").hide();
			mothername_error = false;
		}
	}
	
	function check_fathername(){
		var len = $("#fathername").val().length;
		
		var re = /^[A-Z ]+$/;
		if(len < 3 ){
			$("#fathername_error_msg").html("Father Name length between 3(min) to 25(max) ");
			$("#fathername_error_msg").show();
			fathername_error = true;
		}
		else if(!re.test($("#fathername").val())){
			$("#fathername_error_msg").html("Special characters are not Allowed, use Capital");
			$("#fathername_error_msg").show();
			fathername_error = true;
		}
		else{
			$("#fathername_error_msg").hide();
			fathername_error = false;
		}
	}
	function check_gender(){
		var sel = $('#gender option:selected').val();
		//alert(sel);
		if(sel == "")
		{
		$("#gender_error_msg").html("Please select Your option");
		$("#gender_error_msg").show();
		gender_error = true;
		}
		else{
			$("#gender_error_msg").hide();
			gender_error = false;
		}
		
	}
	function check_branch(){
		var sel = $('#branch option:selected').val();
		//alert(sel);
		if(sel == "")
		{
		$("#branch_error_msg").html("Please select Your Department");
		$("#branch_error_msg").show();
		branch_error = true;
		}
		else{
			$("#branch_error_msg").hide();
			branch_error = false;
		}
		
	}
	function check_lastname(){
		var len = $("#ln").val().length;
		
		var re = /^[A-Z ]+$/;
		if(len < 1 ){
			$("#lastname_error_msg").html("Last Name length between 1(min) to 25(max) ");
			$("#lastname_error_msg").show();
			lastname_error = true;
		}
		else if(!re.test($("#ln").val())){
			$("#lastname_error_msg").html("Special characters are not Allowed, use Capital");
			$("#lastname_error_msg").show();
			lastname_error = true;
		}
		else{
			$("#lastname_error_msg").hide();
			lastname_error = false;
		}
	}
	
	function check_firstname(){
		var len = $("#fn").val().length;
		
		var re = /^[A-Z ]+$/;
		if(len < 3 ){
			$("#firstname_error_msg").html("First Name length between 3(min) to 25(max) ");
			$("#firstname_error_msg").show();
			firstname_error = true;
		}
		else if(!re.test($("#fn").val())){
			$("#firstname_error_msg").html("Special characters are not Allowed, use Capital");
			$("#firstname_error_msg").show();
			firstname_error = true;
		}
		else{
			$("#firstname_error_msg").hide();
			firstname_error = false;
		}
	}
	
	
	function check_rollno(){
		var len = $("#rollno").val().length;
		//alert(len);
		var re = /^([0-9]{2,2})+([A-Z]{3,3})+([0-9L]{2,3})$/i;
		if(len < 7 || len > 8){
			$("#rollno_error_msg").html("Roll Number should be 7 or 8 Letters");
			$("#rollno_error_msg").show();
			rollno_error = true;
		}
		else if (!re.test($("#rollno").val())) {
			$("#rollno_error_msg").html("Special characters are not Allowed, use Capital - 11IMT26");
			$("#rollno_error_msg").show();
			rollno_error = true;			
		}
		else {
			$("#rollno_error_msg").hide();
			rollno_error = false;
		}
		
	}
});