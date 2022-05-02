<?php
$to_email = "dasrina362@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: somondas067@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to";
} else {
    echo "Email sending failed";
}
?>
