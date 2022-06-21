<?php

$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: parekhnikhil1608@gmail.com";

if (mail("nik665716@gmail.com", $subject, $body, $headers)) {
    echo "Email successfully sent...";
} else {

    echo "Email sending failed...";
}

?>
