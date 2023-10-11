<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@domainname.com';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
                "user email: $visitor_email.\n".
                "Subject: $subject.\n".
                "user message: $messages.\n";
$to = 'phamvanvu111a@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>