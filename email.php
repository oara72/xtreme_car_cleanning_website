<?php
	if(isset($_POST['submit'])) {
			//$email_to = " 5199655990@vmobile.ca, deangena@gmail.com";
		 $msg = wordwrap($msg, 150);
		 mail("sgervais643@gmail.com", "My subject",$msg);
		 
			function died($error) {
				// your error code can go here
				echo "We are very sorry, but there were error(s) found with the form you submitted. ";
				echo "These errors appear below.";
				die();
			}
		 // validation expected data exists
		 
			if(!isset($_POST['name']) ||
				!isset($_POST['email']) ||
				!isset($_POST['telephone']) ||
				!isset($_POST['message'])) {
		 
				died('We are sorry, but there appears to be a problem with the form you submitted.');       
			}
			
			$name = $_POST['name']; // required
			$email_from = $_POST['email']; // required
			$telephone = $_POST['telephone']; // required
			$message = $_POST['message']; // required
			$error_message = "";
			
			$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		 
		  if(!preg_match($email_exp,$email_from)) {
			$error_message .= 'The Email Address you entered does not appear to be valid.';
		 }

			$string_exp = "/^[A-Za-z .'-]+$/";
		  if(!preg_match($string_exp,$name)) {
			$error_message .= 'The Name you entered does not appear to be valid.';
		  }
		 
		  if(strlen($message) < 2) {
			$error_message .= 'The Comments you entered do not appear to be valid.';
		  }
		 
		  if(strlen($error_message) > 0) {
			died($error_message);
		  }
	}
?>