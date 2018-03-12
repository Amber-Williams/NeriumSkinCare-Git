<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
header('Location: http://neriumskin.com/thanks/');
//Do you stuff
}
else
{
die("Wrong Code Entered");
}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$from = "<" . $email . ">";
$to = "<sunaina@neriumskincare.com>";
$subject = "New Contact Form TESTING";
$body =
"First name: {$firstName}
Last name: {$lastName}
From: {$email}
Phone: {$phone}
Message: {$message}";
mail($to, "Web Form Inquiry", $body);
header('Location: http://neriumskin.com/thanks/');
?>
