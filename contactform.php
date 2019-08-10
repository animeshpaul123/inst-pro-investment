<?php 

		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$company = $_POST['company'];
		$email = $_POST['mail'];
		$phone = $_POST['mobile'];
		$service = $_POST['services'];
		$message = $_POST['message'];


		$mailTo = "animesh@instaura.co";
		$header = "From: $email \r\n";
		$subject = "Engage Form";
		$text = " From: $firstname\r $lastname \n Phone: $phone \n services: $service \n Company: $company \n  Message: $message";

		mail($mailTo, $subject, $text, $header) or die("Error!");
		header('location:http://instaura.co/test');

	}




?>