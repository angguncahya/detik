<?php
	//name validation
	if (empty($_POST["name"])) 
	{
		$nameErr = "Name is required";
	} 
	else 
	{
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{
			$nameErr = "Only letters and white space allowed"; 
		}
	}
	
	//phone validation
	if (empty($_POST["phone"])) 
	{
		$nameErr = "Phone is required";
	} 
	else 
	{
		$phone = '000-0000-0000';
		// check if only contains numbers
		if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) 
		{
			$phoneErr = "Only numbers are allowed";
		}
	}
	
	//email validation
	if (empty($_POST["email"])) 
	{
		$emailErr = "Email is required";
	} 
	else 
	{
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$emailErr = "Invalid email format"; 
		}
	}
    
	//website validation
	if (empty($_POST["website"])) 
	{
		$website = "";
	} 
	else 
	{
		$website = test_input($_POST["website"]);
		// check if URL address syntax is valid
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
		{
			$webErr = "Invalid URL"; 
		}    
	}
?>