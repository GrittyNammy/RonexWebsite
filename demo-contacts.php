
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
if( isset($_POST['name']) )
{
	$to = 'shashi@ronex.co.in'; // Replace with your email
	
	$subject = $_POST['subject'];
	$message = $_POST['message'] . "\n\n" . 'Regards, ' . $_POST['name'] . '.';
	$headers = 'From: ' . $_POST['name'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>