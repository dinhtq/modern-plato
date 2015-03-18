

$(document).ready(function() {

//focuses the first text field in a page
	$(':text:first').focus();

	
	
	$('#state').change(function(){
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading cities" /></div> ');
		$.get('includes/loadcities.php?state=' + $(this).val(),
			function(data){
				$('#city').html(data);
				$('#loader').slideUp(100, function() {
					$(this).remove();
				});
			} );


	});//end state change listener
	

	/*	

	$('#signUp').validate({

		rules : {
			username : {
				required : true,
				remote : 'checkUsername.php'
			},
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
				required : "Please enter a username mother fucker",
				remote : "Username taken"
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
	
	*/
	

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
			city : {
				required : "Please enter the city location"
				
			},
			state : {
				required : "Please enter the state location"
				
			},
			description : {
				required : "Please enter the description of the case"
			},
			email : {
				required : "Please enter an email address",
				email : "This is not a valid email address"
			}
			
					
		}

	});  */


	
	






















}); //end ready









