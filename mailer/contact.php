<?php

define('TO_EMAIL','hassani@whassani.fr');
define('SUBJECT','Contact from your website');	
	
// Messages
define('MSG_INVALID_NAME','Please enter your name.');
define('MSG_INVALID_EMAILFORM','Please enter valid e-mail.');

define('MSG_INVALID_EMAIL','Please enter your e-mail.');
define('MSG_INVALID_MESSAGE','Please enter your message.');
define('MSG_SEND_ERROR','Sorry, we can\'t send this message.');

ini_set("SMTP","smtp.whassani.fr");
ini_set("smtp_port","25");
ini_set('sendmail_from', 'example@YourDomain.com');


	extract($_POST) ;
	$err = "" ;
	$pattern = "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$^";
	if(!preg_match_all($pattern, $email, $out)) {
		$err = MSG_INVALID_EMAILFORM; // Invalid email
	}
	if(empty($email)) {
		$err = MSG_INVALID_EMAIL; // No Email
	}	
	if(empty($message)) {
		$err = MSG_INVALID_MESSAGE; // No Message
	}
	if (empty($name)) {
		$err = MSG_INVALID_NAME; // No name 
	}
    if (empty($err)){
		
		//send the email
		$sent = mail(TO_EMAIL,SUBJECT,$message,$headers); 
		
		if ($sent) {
				// If the message is sent successfully print
				echo "SEND"; 
				$msg= "ok";
			} else {
				$msg= "no";
				// Display Error Message
				echo MSG_SEND_ERROR; 
			}
	} else {
		echo $err; // Display Error Message
	}


	header('location:../index.html?msg='.$msg)
?>
