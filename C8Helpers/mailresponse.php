<?php
    function report($error) {
        // your error code can go here
        echo "<p>We are very sorry, but there were error(s) found with the form you submitted:</p><br />";
        echo $error."<br /><br />";
        die();
    }
	
	// validate expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['captcha']) ||
        !isset($_POST['message'])){
        report('<p>We are sorry, but there appears to be a problem with the form you submitted:</p>');      
    }

	$captcha = $_POST['captcha'];
	$name = $_POST['name'];
	$email_from = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$message = $_POST['message'];
	$error_message = "";

// Validation	
	// check captcha
	if(strlen($captcha) == 0)
		$error_message .= "- Please, solve the equation<br>";
		//report("Solve the equation");
	else {
		if($captcha != 10) {
		$error_message .= "- That answer, $captcha, was not correct, please try again.<br>";
		// report("Incorrect answer: $captcha");
		}
	}
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	if(!preg_match($email_exp,$email_from)) {
		$error_message .= '- Email Address entered does not appear to be valid.<br>';
	}
	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$name)) {
		$error_message .= '- Name you entered does not appear to be valid.<br>';
	}
	if(strlen($message) < 2) {
		$error_message .= '- Message entered is very short, are you sure there isn\'t more you\'d like to say?<br>';
	}
	if(strlen($error_message) > 0) {
		report($error_message);
	}
	else	
		echo "<div id='success' style='height: 144px; line-height: 144px; text-align: center;' onclick='closeModal()'>Success! We'll get back to you shortly - click to close</div>";

// Mail
	$to = "ryan@mohawk.ca";
	$from = "support@continent8.com";
	$subject = "Form submission from: Contact Us";
	if(strlen($company) > 2) { $subject .= " - " . $company; }
	
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$time = date("F j, Y, g:i a");
	$email_message = "Submitted on $time\nSubmitted by IP [$client_ip]\n\nSubmitted values are:\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }	
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    if(strlen($phone) > 0) { $email_message .= "Phone: ".clean_string($phone)."\n"; }
	if(strlen($company) > 0) { $email_message .= "Company: ".clean_string($company)."\n"; }
    $email_message .= "Message:\n\t".clean_string($message)."\n";

	// create email headers
	$headers = 'From: '.$from;//."\r\n".
	//'Reply-To: '.$from."\r\n" .
	//'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $email_message, $headers)){
		// echo "Successfully accepted for delivery";
	}
	else { 
		echo "Failed";
	}
?>