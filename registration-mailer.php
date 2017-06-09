<?php

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
define('SENDER', 'matt@mtmc.ca');

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
define('RECIPIENT', .$_POST["email"]);

// Replace smtp_username with your Amazon SES SMTP user name.
define('USERNAME','AKIAIZG4HOGUE2KPNUDA');

// Replace smtp_password with your Amazon SES SMTP password.
define('PASSWORD','Am/uZWH5lvXEVNXbMLbGRUglAK9jgOkzEA61QKfrZTAa');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
define('HOST', 'email-smtp.us-east-1.amazonaws.com');

 // The port you will connect to on the Amazon SES SMTP endpoint.
define('PORT', '587');

// Other message information
define('SUBJECT','Homestead Heath - New Account Registration');
define('BODY','New Account Registration' .$_POST["fname"]);

require_once 'Mail.php';

$headers = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Subject' => SUBJECT);

$smtpParams = array (
  'host' => HOST,
  'port' => PORT,
  'auth' => true,
  'username' => USERNAME,
  'password' => PASSWORD
);

 // Create an SMTP client.
$mail = Mail::factory('smtp', $smtpParams);

// Send the email.
$result = $mail->send(RECIPIENT, $headers, BODY);

if (PEAR::isError($result)) {
  echo("Email not sent. " .$result->getMessage() ."\n");
} else {
  echo("Email sent!");
}

?>
