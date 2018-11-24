<?php
	//This grabs variables out of the POST array, which is what the HTML sends the php script when 
	//a user clicks the 'Submit' button
	$name =$_POST['Name'];
	$company=$_POST['Company'];
	$visitor_email = $_POST['Email'];
	$body = $_POST['Message'];
	
	//This sets up additional variables that we'll need before calling the mail function
	$email_subject="New Website Message!";
	$email_body="From $name ($visitor_email) with $company: \n \n $body";
	$to = 'ekleiner@safebetsoftwarellc.com';
	
	//The email can't literally be 'from' the user; servers will think the email was hacked
	$headers = "From: website@safebetsoftwarellc.com \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	//This function physically sends the email
	mail($to,$email_subject,$email_body,$headers);
	
	header("location:http://safebetsoftwarellc.com/message_sent.html");
?>