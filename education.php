<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'new email form user';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'fakegang535@gmail.com';

$headers = "from: $email_form \r\n";

$headers .= "from: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: yt web contact.html")
?>