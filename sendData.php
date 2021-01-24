<?PHP 
$webmaster_email = "maja.moraswi@gmail.com";
$webmaster_email2 = "info@motionwebdesigns.co.za";
	try{
			$email_address = $_GET['email'];
			$comments = $_GET['message'] ;
			$first_name = $_GET['name'] ;
			$subject_msg = $_GET['subject'];
			$msg = 
			"First Name: " . $first_name . "\r\n" . 
			"Email: " . $email_address . "\r\n" . 
			"Has sent a message of Subject : " . $subject_msg . "\r\n" . 
			"The Message IS : " . $comments ;
			mail( "$webmaster_email", "Feedback From Global Healthcare Positions", $msg );
			mail( "$$webmaster_email2", "Feedback From Global Healthcare Positions", $msg );
			echo 'OK';
	}catch (Exception $e) {
		echo 'notOk';
	}
		   
?>
