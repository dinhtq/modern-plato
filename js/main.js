

$(document).ready(function() {

//focuses the first text field in a page
	$(':text:first').focus();
	

	$('#signUp').validate({

		rules : {
			username : 'required',
			email : {
				required : true,
				email: true
			},
			password : {
				required : true,
				rangelength:[8,16]
			},
			retype_pw : {
				required : true,
				equalTo: '#password'
			}
		}, //end rules

		messages: {
			username : {
				required : "Please enter a username"
			},
			email : {
				required : "Please enter an email address",
				email : "This is not a valid email address"
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

	}); //end validate fxn 


	$('#postCase').validate(); /*{

		rules : {
			city : 'required',
			state : 'required',
			description : 'required',
			email : {
				required : true,
				email: true
			}
			

		}, //end rules

		messages: {
			email : {
				required : "Please enter an email address",
				email : "This is not a valid email address"
			},
			city : {
				required : "Please enter the city location"
				
			},
			state : {
				required : "Please enter the state location"
				
			},
			description : {
				required : "Please enter the description of the case"
			}
				
		}

	}); //end validate fxn */


}); //end ready









