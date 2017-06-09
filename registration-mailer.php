<?php
if(isset($_POST["submit_button"])) {
    // Now check if the posted input element is empty, if empty stop by echo a error message
    // Otherwhise continue executing script
    if(empty($_POST["email"])) {
        echo "You forgot to fill in this form-element.";
    }else{
        // Continue
require 'message-body.php';
// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
define('SENDER', 'no-reply@homesteadheath.com');
// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
define('RECIPIENT', $_POST["email"]);
define('MATTC', 'matt@mtmc.ca');
define('HHSALES', 'nayrthomas@gmail.com');

require '/var/registration_mailer/aws.php';

// Other message information
define('SUBJECT','Homestead Heath - New Account Registration');
require_once 'Mail.php';
$CustHeaders = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Subject' => SUBJECT,
  'Content-type' => 'text/html');
$MattCHeaders = array (
  'From' => SENDER,
  'To' => MATTC,
  'Subject' => SUBJECT,
  'Content-type' => 'text/html');
$HHSalesHeaders = array (
  'From' => SENDER,
  'To' => HHSALES,
  'Subject' => SUBJECT,
  'Content-type' => 'text/html');

$smtpParams = array (
  'host' => HOST,
  'port' => PORT,
  'auth' => true,
  'username' => USERNAME,
  'password' => PASSWORD
);
 // Create an SMTP client for RECIPIENT
$mail = Mail::factory('smtp', $smtpParams);
// Send the email.
$result = $mail->send(RECIPIENT, $CustHeaders, $message);

// Create an SMTP client for MATTC.
$mail = Mail::factory('smtp', $smtpParams);
// Send the email.
$result = $mail->send(MATTC, $MattCHeaders, $message);

// Create an SMTP client for HHSALES.
$mail = Mail::factory('smtp', $smtpParams);
// Send the email.
$result = $mail->send(HHSALES, $HHSalesHeaders, $message);

if (PEAR::isError($result)) {
  echo("Email not sent. " .$result->getMessage() ."\n");
} else {
  require 'success.php';
}
}
}
?>
