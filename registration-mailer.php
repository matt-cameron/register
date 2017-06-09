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

$to = array(
    'member' => array(
      0 => 'John Doe <matt@mtmc.ca>',
      1 => 'Jane Doe <nayrthomas@gmail.com>',
    ),
  );

define('RECIPIENT', CFComplexType::map(array(
  'ToAddresses' => $to,
));
);

require '/var/registration_mailer/aws.php';

// Other message information
define('SUBJECT','Homestead Heath - New Account Registration');

require_once 'Mail.php';

$headers = array (
  'From' => SENDER,
  'To' => RECIPIENT,
  'Subject' => SUBJECT,
  'Content-type' => 'text/html');

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
$result = $mail->send(RECIPIENT, $headers, $message);

if (PEAR::isError($result)) {
  echo("Email not sent. " .$result->getMessage() ."\n");
} else {
  require 'success.php';
}

}
}

?>
