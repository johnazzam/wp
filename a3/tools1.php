<?php
  session_start();


  $name = $_POST['name'];
  $email = $_POST['EmailID'];
  $mobile = $_POST['MobileNum'];
  $subject = $_POST['SubjectID'];
  $message = $_POST['MessageID'];
  $data = [$name, "/n", $email, "/n", $mobile, "/n", $subject, "/n", $message, "/n"];

if(isset($_POST['submit_button']))
{
$fp = fopen('mail.txt', 'a');
fputcsv($fp, $data);
fclose($fp);
}


/*
if(isset($_POST['submit']))
{
   contactForm();
}


function contactForm() {

$Name = $_POST['name'];
$Email = $_POST['EmailID'];
$Mobile = $_POST['MobileNum'];
$Subject = $_POST['SubjectID'];
$message = $_POST['message'];
$formcontent="From: $Name \n Email: $Email \n Mobile: $Mobile \n Subject: $Subject \n Message: $message";
$recipient = "s3767649@student.rmit.edu.au";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
}
*/

?>
