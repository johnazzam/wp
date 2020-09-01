<?php
  session_start();

    if(isset($_POST["submit"]))
    {
     if(empty($_POST["name"]))
     {
      $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
     }
     else
     {
      $name = clean_text($_POST["name"]);
      if(!preg_match("/^[a-zA-Z ]*$/",$name))
      {
       $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
      }
     }
     if(empty($_POST["email"]))
     {
      $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
     }
     else
     {
      $email = clean_text($_POST["email"]);
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
       $error .= '<p><label class="text-danger">Invalid email format</label></p>';
      }
     }
     if(empty($_POST["subject"]))
     {
      $error .= '<p><label class="text-danger">Subject is required</label></p>';
     }
     else
     {
      $subject = clean_text($_POST["subject"]);
     }
     if(empty($_POST["message"]))
     {
      $error .= '<p><label class="text-danger">Message is required</label></p>';
     }
     else
     {
      $message = clean_text($_POST["message"]);
     }
  }

$Name = "Name: ";
$Email  = "Email: ";
$Number = "Mobile: ";
$Subject = "Subject: ";
$Message = "Message: ";


  $name = $_POST['name'];
  $email = $_POST['EmailID'];
  $mobile = $_POST['MobileNum'];
  $subject = $_POST['SubjectID'];
  $message = $_POST['MessageID'];
  $data = [$Name.$name, $Email.$email, $Number.$mobile, $Subject.$subject, $Message.$message];

if(isset($_POST['submit_button']))
{
$fp = fopen('mail.txt', 'a');
fputcsv($fp, $data);
fclose($fp);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 3 - s3767649</title>

  <link rel="stylesheet" href="styles.css">

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>
  <script defer src="script.js"></script>
</head>

<body>
  <header>
    <div>
      <h2>ANZAC Douglas Raymond Baker - Letters Home</h2>


    </div>
  </header>


  <nav>
    <div id="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">Introduction</a>
        <a href="Letters.php">Letters and Post Cards</a>
        <a href="index.php">Action Places</a>
        <a href="index.php">Links to related materials</a>
        <a href="index.php">Comments</a>
      <a href="contact.php">Contact Us</a>
    </div>
  </nav>


<?php echo "Your message has been submitted."; ?>
</body>
