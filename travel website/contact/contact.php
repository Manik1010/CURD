<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'abdurrahimsgm@gmail.com';
$email_subject = "New Form submission";
$email_body = "User Name: $name.\n".
               "User Email:$visitor_email.\n".
               "User Message: $message.\n";
$to = "abdurrahimcsebd@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To:$visitor_email \r\n";
mail($to,$email_subject ,$email_body,$headers );
header("Location:contac.html");
?>