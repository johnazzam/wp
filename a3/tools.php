<?php
  session_start();

// Put your PHP functions and modules here
$link = "http://localhost/".$_GET['redirect'].".php";
echo '<script>window.location ="'.$link.'"</script>';

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
