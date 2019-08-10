<?php
	if(isset($_POST["submit"])){
	// Checking For Blank Fields..
		if($_POST["firstname"]==""||$_POST["lastname"]==""||$_POST["mail"]==""||$_POST["mobile"]==""){
		echo " Please, Fill All Fields..";
		}else{
		// Check if the "Sender's Email" input field is filled out
		$email=$_POST['mail'];
		// Sanitize E-mail Address
		$email =filter_var($email, FILTER_SANITIZE_EMAIL);
		// Validate E-mail Address
		$email= filter_var($email, FILTER_VALIDATE_EMAIL);
		if (!$email){
		echo "Invalid Email Address !";
		}
		else{
		$fname   = $_POST['firstname'];
		$lname   = $_POST['lastname'];
		$name    = $fname . " " .$lname;
		/*$email    = $_POST['mail'];*/
		$mailTo = "leads@instaura.co";
		$company = $_POST['company'];
		$mobile  = $_POST['mobile'];
		$service = implode(", ", $_POST['services']);
		$subject = "Enquiry Mail - Instaura";
		$message = $_POST['message'];
		$content = "From: " . $name . "\r\n" . "Company: " . $company . "\r\n" . "Message: " . $message . "\r\n" .  "Chosen Services: " . $service . "\r\n" . "Email: " . $email . "\r\n" . 				"Phone: " . $mobile ;
		$headers = 'From:'. $email . "\r\r"; // Sender's Email
		/*$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender*/
		// Message lines should not exceed 70 characters (PHP rule), so wrap it
		$message = wordwrap($message, 70);
		// Send Mail By PHP Mail Function
		mail($mailTo, $subject, $content, $headers);
		echo "Your mail has been sent successfuly ! Thank you ...";
		header('location:http://instaura.co/Thank.html');
	}
	}
}
?>