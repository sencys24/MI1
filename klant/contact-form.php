<?php

$name = $_Post['name'];
$visitor_email = $_Post['email'];
$message = $_POST['message'];

$email_from = 'michael.vanacker2@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
    "User Email: $visitor_email.\n".
    "User Message: $message.\n";

$to = "rabendicio@yahoo.com";

$headers = "From: $email_form \r\n";

$headears .= "Reply-To $visitor_email \r\n";

mail($to,$email-subject,$email_body,$headers);

header ("Location: exampleofslideshow.html");

?>
