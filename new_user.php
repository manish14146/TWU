<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<title>Add User</title>
<style type="text/css">

</style>
</head>
<body>

<h2 align="center">Add New User</h2>

<div style="width:40%;margin:0 auto;">

<form method="post" id="register_form">
	
	<label>Name</label><br>
	<input class="format_input" type="text" id="user_name" required><br>

	<label>Email</label><br>
	<input class="format_input" type="email" id="user_email" required><br>

	<label>Date Of Birth</label><br>
	<input class="format_input" type="date" id="user_dob" required><br>

	<label>Aadhar Number</label><br>
	<input class="format_input" type="text" id="aadhar" required><br>

	<label>Home Area</label><br>
	<input class="format_input" type="text" id="user_home" required><br>

	<label>Wallet Amount</label><br>
	<input class="format_input" type="text" id="user_wallet" required><br><br>

	<input class="format_input l_btn" type="submit" id="submit" value="Submit" required><br>

</form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

	$('#register_form').submit(function(event){

		var name = $('#user_name').val();
		var email = $('#user_email').val();
		var dob = $('#user_dob').val();
		var aadhar = $('#aadhar').val();
		var home = $('#user_home').val();
		var wallet = $('#user_wallet').val();

		$.ajax({
		  type: 'POST',
		  url: 'server/upload_user.php',
		  data: {
		  	name: name,
		  	email: email,
		  	dob: dob,
		  	aadhar: aadhar,
		  	home: home,
		  	wallet: wallet
		  },
		  success: function(x) {
		  	if (x == 'email_exists'){
		  		alert('Email Already Exists!');
		  	}else if(x == 'yes'){
		  		alert('User Added Successfully!');
		  		location.reload();
		  	}else{
		  		alert(x);
		  	}
		  }
    });
		event.preventDefault();
	});

</script>

</body>
</html>