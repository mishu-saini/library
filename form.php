<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$project = $_POST['project'];
$appdt = $_POST['app-date'];
 $apptm = $_POST['app-time'];
 $subject = $_POST['subject'];
$Message = $_POST['Message'];


$to = "manishasaini20ps233@gmail.com";
$subject = "Inquiry/Booking from brightusfloor";
$complete_msg = "";
$complete_msg .= "\r\n Subject : $subject";

$complete_msg .= "\r\n\r\n Name : $name";
$complete_msg .= "\r\n email : $email";
$complete_msg .= "\r\n Phone : $phone";
$complete_msg .= "\r\n project : $project";

$complete_msg .= "\r\n\r\n Appointment : $appdt @ $apptm Hours";

$complete_msg .= "\r\n\r\n Message from Sender : $Message";


//Send email
mail($to, $subject, $complete_msg, "From: $name<" . $email . ">");

//Email response
header('Location: thank-you.html');

/*
$headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
$bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $complete_msg];
$body = join(PHP_EOL, $bodyParagraphs);

if (mail($to, $subject, $body, $headers)) {

   header('Location: thank-you.html');
} else {
   $errorMessage = 'Oops, something went wrong. Please try again later';
}
*/
?>