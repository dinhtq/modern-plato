



$(document).ready(function(){


	

	$('#signUp').validate({

			rules : {
				username : {
					required : true,
					remote : 'checkUser.php'
				},
				email : {
					required : true,
					email: true,
					remote : 'checkEmail.php'
				},
				password : {
				required : true,
				rangelength:[8,16]
				},
			retype_pw : {
				required : true,
				equalTo: '#password'
				}
			},//end rules

			messages: {
				username : {
					required : "username mother fucker",
					remote : "this shit is used pick another one"
					
					},
				email : {
					required : "Please enter an email address mother fucker",
					email : "This is not a valid email address mother fucker",
					remote : "This email is already registered, please log in"
				},
				password : {
					required : "Please enter a password",
					rangelength : "Password must be between 8 and 16 characters long"
				},
				retype_pw : {
					required : "Please re-enter the password",
					equalTo : "The passwords do no match"
				}

			}




	});//end validation fxn

	

});



		
	



	





