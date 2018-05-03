<?php
session_start();
if(isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["code"]==$_POST["captcha"])
{
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$message = $_POST['message'];
$from = "<" . $email . ">";
$to = "info@neriumskincare.com , amber@neriumskincare.com , LizatNeriumBiotech@gmail.com";
$subject = "Web General Inquiry";
$body =
"First name: {$firstName}
Last name: {$lastName}
From: {$email}
Country: {$country}
Phone: {$phone}
Name of the Nerium product you use: {$product}
Message: {$message}";
mail($to, "Web General Inquiry", $body);
header('Location: http://neriumskin.com/thanks/');
}
else
{
die("Wrong Code Entered");
}

?>
