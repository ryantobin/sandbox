

<?php
if(isset($_POST['submit']))
{
	$message=
	'Name: '.$_POST['name'].'<br>
	 Email: '.$_POST['email'].'<br>
	 Comment: '.$_POST['message'].'
	';

	require_once('mailer/class.phpmailer.php');
	require_once('mailer/class.smtp.php');
	//require '../assets/PHPMailer/PHPMailerAutoload.php'; // require the autoloader (that should include phpmailer and its dependencies)
	// Instantiate Class
	$mail = new PHPMailer();

	// Set up SMTP
	$mail->IsSMTP();			// Sets up a SMTP connection
	$mail->SMTPAuth = true;		// Connection with the SMTP does require authorization
	$mail->SMTPSecure = 'tls'; //"ssl";	// Connect using a TLS connection
	$mail->Host = "smtp.gmail.com";	// GMail SMTP server address
	$mail->Port = 587; //465;			// SMail SMTP port
	$mail->Encoding = '7bit';

	// Authentication
	$mail->Username = "kaleiwolf@gmail.com"; // My Full GMail Address
	include 'password.php';

	// Compose
	$mail->SetFrom($_POST['email'], $_POST['name']);
	$mail->AddReplyTo($_POST['email'], $_POST['name']);
	$mail->Subject = "Message from the Website";
	$mail->MsgHTML($message);

	// Send To
	$mail->AddAddress("kaleiwolf@gmail.com","My Self"); // Where to send it
	$result = $mail->Send();	// Send!
	$message = $result ? 'Message Sent Successfully!' : 'Sending Failed! (better let Ryan know by emailing ryan@tobin.ca';
	unset($mail);
	//require 'mailer.php';
}
?>
<form METHOD="POST" ACTION="rsvp.php">
	<input TYPE="text" NAME="name" SIZE="30" placeholder='Name' class='form-input'>
	<input TYPE="text" NAME="email" SIZE="30" placeholder='Email' class='form-input'>
	<textarea NAME="message" ROWS=6 COLS=40 placeholder='Message'></textarea>
	<br>
	<input TYPE="submit" name='submit' value='Send' class='button-send'>
</form>
<p><?php if(!empty($message)) echo $message; ?></p>
