<?php
$to = "office@ajaykumarsarnaik.com"; // Using the address found in contact page
$subject = "Server Email Test";
$message = "This is a test email to check if PHP mail() is working on the server.";
$headers = "From: webmaster@" . $_SERVER['HTTP_HOST'];

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully to $to";
} else {
    echo "Mail delivery failed.";
}
?>
