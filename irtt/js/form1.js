
$(document).ready(function(){
    $("input").focus(function(){
        $(this).css("background-color",  "#a9dfdf");
    });
    $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});

$("button").click(function() {
var txt = $('input').val();
var re = /^[ A-Za-z0-9,.@]*$/;
if (re.test(txt)) {
return true;
}
else {
alert('Please Enter Valid Text');
return false;
}
});

$('input').on('keypress', function (event) {
    var regex = new RegExp("^[ A-Za-z0-9,.@]+$");
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
       event.preventDefault();
       return false;
    }
});