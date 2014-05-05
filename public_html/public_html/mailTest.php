<?php 
	$to = 'krg.lakshminarasimhan@gmail.com';
	$subject = 'Activate your MuzicDB account.';
	$message = 'Your confirmation link \r\n Click on this link to activate your account \r\n <link>';
	$header = 'from: MuzicDB';

	$sendMail = mail($to, $subject, $message, $header);
?>