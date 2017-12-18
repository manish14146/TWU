<?php

	include 'dbconnect.php';

	if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['dob']) and isset($_POST['aadhar']) and isset($_POST['home']) and isset($_POST['wallet'])){
		
		$signup_name = mysqli_real_escape_string($con, $_POST['name']);
		$signup_email = mysqli_real_escape_string($con, $_POST['email']);
		$signup_dob = mysqli_real_escape_string($con, $_POST['dob']);
		$signup_aadhar = mysqli_real_escape_string($con, $_POST['aadhar']);
		$signup_home = mysqli_real_escape_string($con, $_POST['home']);
		$signup_wallet = mysqli_real_escape_string($con, $_POST['wallet']);
	
		$check = mysqli_query($con, "SELECT * from `user` where `email`='$signup_email'");

		if(mysqli_num_rows($check)>0){
			
			echo 'email_exists';

		}else{
			
			mysqli_query($con, "INSERT INTO `user`(`name`, `email`, `dob`, `aadhar`, `home`, `wallet`) VALUES ('$signup_name', '$signup_email', '$signup_dob', '$signup_aadhar', '$signup_home', '$signup_wallet')");
 						
			echo 'yes';
		}
	}

?>