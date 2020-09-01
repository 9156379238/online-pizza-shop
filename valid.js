

	console.log("called");

function validation(){


	var user = document.getElementById("user").value;
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var pass = document.getElementById('pass').value;
	var conpass= document.getElementById('conpass').value;
	var phone_no= document.getElementById('phone no').value;
	var email = document.getElementById('email').value;
	var error_message = document.getElementById('error_message');
	var text;

	error_message.style.padding="10px";
	
	if(typeof user==undefined){
		error_message.innerHTML.innerHTML = "Username is required";
		showError();
		return false;
	}
	if(user.length <= 3 || user.length > 20) {
		error_message.innerHTML ="** Username should be minimum 2 and maximum 20 character";
		showError();
		return false;	
	}
	if(typeof fname==undefined){
		error_message.innerHTML ="** First name is required";
		showError();
		return false;
	}
	if(fname <= 2 || fname.length > 20) {
		error_message.innerHTML = "** First name should be minimum 2 and maximum 20 letters";
		showError();
		return false;	
	}
	if(fname.match(/[0-9]+$/)){
		error_message.innerHTML = "** Invalid first name";
		showError();
		return false;	
	}
	if(typeof lname == undefined){
		error_message.innerHTML = "** Last name is required";
		showError();
		return false;
	}
	if(lname <= 2 || lname.length > 20) {
		error_message.innerHTML = "** Last name should be minimum 2 and maximum 20 letters";
		showError();
		return false;	
	}
	if(lname.match(/[0-9]+$/)){
		error_message.innerHTML = "** Invalid last name";
		showError();
		return false;	
	}
	if(typeof pass == undefined){
		text='** Password is required';
		error_message.innerHTML =text;
		return false;
	}
	if((pass.length <= 5) || (pass.length > 20)) {
		text = "** Passwords should be between minimum 5 and maximum 20 character";
		error_message.innerHTML =text;
		return false;	
	}
	if(pass != conpass){
		error_message.innerHTML = "** Password does not match the confirm password";
		showError();
		return false;
	}
	if(typeof conpass == undefined){
		text=' ** confirm password is required';
		error_message.innerHTML =text;
		return false;
	}
	if(typeof phone_no == undefined){
		error_message.innerHTML =' ** Mobile number is required';
		showError();
		return false;
	}
	if(phone_no.match(/[a-zA-z]+$/)){
		error_message.innerHTML = "** Invalid mobile number";
		showError();
		return false;
	}
	if(phone_no.length!=10){
		error_message.innerHTML ="** Mobile Number should be 10 digits";
		showError();
		return false;
	}
	if(typeof email == undefined){

        error_message.innerHTML = "** Please fill the email id field";
        showError();
		return false;
	}
	if(email.indexOf('@') <= 0 ){
		
        error_message.innerHTML ="** @ Invalid Position";
        showError();
		return false;
	}

	if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
	
        error_message.innerHTML ="** . Invalid Position";
        showError();
		return false;
	}

}

function showError(){
	error_message.style.display = 'block';
	setTimeout(() => {
		error_message.style.display = 'none';
	}, 2000);
}