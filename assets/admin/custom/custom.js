$(document).ready(function(){
if($('#profile_form').length > 0){
		$('#profile_form').validate({
			rules: {
				email: {
					required: true,
                    email: true
				},
				name: {
					required: true
				}
				
			},
			messages: {
				email: {
					required: 'Email address is required',
					email: 'Valid Email is required'
				},
				name: {
					required: 'Name field is required'
				}
			},
			submitHandler: function(form) {
				form.submit();
			}
		});
	}
	
	if($('#passoword_form').length > 0){
		$('#passoword_form').validate({
			rules: {
				'Current_Password': {
					required: true
				},
				'New_Password': {
					required: true
				},
				'Confirm_Password': {
					required: true,
					equalTo: '#New_Password'
				}	
			},
			submitHandler: function(form) {
				$.ajax({
					type:'POST',
					url:'process/process.php?action=change_password',
					data: $("#passoword_form").serialize(),
					success: function (data) {
						if(data == 1)
						{
							$('#Current_Password').val('');
							$('#New_Password').val('');
							$('#Confirm_Password').val('');
							$('#error_pass').html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong>Your Password Change Successfully.</div>');
							return false;
						}
						else if(data == 0)
						{
							$('#Current_Password').val('');
							$('#New_Password').val('');
							$('#Confirm_Password').val('');
							$('#error_pass').html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>Current Password is not matched.</div>');
							return false;	
						}
					}
				});
				return false;
			}
		});
	}
});

