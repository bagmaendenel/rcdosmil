<?php

if(isset($_POST['submit'])) {
	$subject = 'Bericht van RC dos mil.nl';
	$email = $_POST['text'];
	$to = 'lars@larsrasmussen.nl';
	$from = $_POST['email'];

	ini_set('sendmail_from', $from);

	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=iso-8859-1";
	$headers[] = "From: Rcdosmil.nl <{$from}>";
	$headers[] = "Reply-To: <{$from}>";
	//$headers[] = "Subject: {$subject}";
	$headers[] = "X-Mailer: PHP/".phpversion();

	mail($to, $subject, $email, implode("\r\n", $headers) );
	
	header('Location: contact.php?send=true');
}




?>