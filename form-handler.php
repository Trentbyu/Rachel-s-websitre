<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'trent-black@hotmail.com'


$email_subject = 'New Form Submission'

$email_body = "User Namer: $name.\n".
                "User Email: $visitor_email.\n".
                "subject: $subject.\n".
                "User Message: $message.\n";

$to = 'trent-black@hotmail.com';

$headers = "from: $email_from \r\n";
$headers .= "reply-TO: $visitor_email\r\n";

mail($to,$email_subject,$email_body, $headers);

header("loaction: contact.html")


?>