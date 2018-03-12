<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$from = "<" . $email . ">";
$to = 'info@neriumskincare.com, amber@neriumskincare.com';
$subject = "Web News Inquiry";
$body =
"First name: {$firstName}
Last name: {$lastName}
From: {$email}
Phone: {$phone}
Message: {$message}";
mail($to, "Web General Inquiry", $body);
header('Location: http://neriumskin.com/thanks/');
?>
