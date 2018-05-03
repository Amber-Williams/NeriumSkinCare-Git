<?php
$fullName = $_POST['fullName'];
$testimonials = $_POST['testimonials'];
$product = $_POST['product'];
$from = "<" . $email . ">";
$to = "info@neriumskincare.com , amber@neriumskincare.com";
$subject = "Testimonial Post";
$body =
"Full name: {$fullName}
Products Used: {$product}
Testimonials: {$testimonials}";
mail($to, "Testimonial Post", $body);
header('Location: http://neriumskincare.com/thankyou/');
?>
