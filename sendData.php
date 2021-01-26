<?PHP 
$webmaster_email = "info@timacmedical.co.za";
$webmaster_email2 = "info@timacmedical.co.za";
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
			mail( "$webmaster_email", "Feedback From Timac Medical Solutions", $msg );
			mail( "$$webmaster_email2", "Feedback From Timac Medical Solutions", $msg );
			echo 'OK';
	}catch (Exception $e) {
		echo 'notOk';
	}
		   
?>
