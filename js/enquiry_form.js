function validation(){
var name=document.etenForm.name.value;var mobile=document.etenForm.mobile.value;
var email=document.etenForm.email.value;
var message=document.etenForm.message.value;var filter=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var IndNum=/^[789]\d{9}$/;if(name=="Name :"||name==""||name.trim()==""){alert("Please enter your name");
document.etenForm.name.focus();return!1}else if(mobile=="Mobile Number :"||mobile==""||mobile.trim()==""){alert("Please enter your mobile number");document.etenForm.mobile.focus();return!1}
if(mobile!=""&&!IndNum.test(mobile)){alert("Please Enter Valid mobile No. Start with 9 or 8 or 7");document.etenForm.mobile.focus();return!1}else if(email=="Email Address :"||email==""||email.trim()==""){alert("Please enter your Email its compalsary");document.etenForm.email.focus();return!1}
if(email!=""&&!filter.test(email)){alert('Please provide a valid email address');document.etenForm.email.focus();return!1}
else if(message==""||message.trim()==""){alert("Please Enter Your Message:");
document.etenForm.message.focus();return!1}}