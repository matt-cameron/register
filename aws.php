<?php

// Replace smtp_username with your Amazon SES SMTP user name.
define('USERNAME','FILL IN');

// Replace smtp_password with your Amazon SES SMTP password.
define('PASSWORD','FILL IN');

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
define('HOST', 'email-smtp.us-east-1.amazonaws.com');

 // The port you will connect to on the Amazon SES SMTP endpoint.
define('PORT', '587');

?>
