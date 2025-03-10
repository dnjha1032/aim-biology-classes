<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
// $mobile = $_POST['mobile-no'];
$subject = $_POST['course'];
$message = $_POST['message'];


$email_from = 'info@highflightedu.in';

$email_subject = 'New Form Submission';

$email_body = "User Name:$name.\n".
                "User Email:$visitor_email.\n".
                // "contact:$mobile.\n".
                "Subject:$subject.\n".
                "User Message:$message.\n";

$to = 'highflightedu@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Replay-To : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");
