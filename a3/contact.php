<!DOCTYPE html>
<html lang='en'>

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
<br>


<div id="error"></div>
<article id='Contact-Us'>
      <div class="Contact-Us">
    <h3>Contact Us</h3>
      <form name="ContactUsForm" method="POST" action="tools.php" onsubmit="return validator()" target="_blank">

        <p><label for="Name">Name: </label>
        <input type="text" id="Name" name="name" placeholder="John Smith" required>
            <br>
        <label for="Email">Email: </label>
        <input type="text" id="Email" name="EmailID" placeholder="example@domain.com" required>
            <br>
        <label for="Mobile">Mobile: </label>
        <input type="text" id="Mobile" name="MobileNum" placeholder="0412345678">
            <br>
        <label for="Subject">Subject: </label>
        <input type="text" id="Subject" name="SubjectID" placeholder="Subject" required>
            <br>
        <label for="Email">Message: </label>
        <input type="msg" id="Message" name="MessageID" placeholder="Type your message here" required>
            <br>
        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
</article>

      <article id=submit_button>
        <input type="submit" value="Submit" name="submit_button" onsubmit=href='contact.php'/>
  </article>
      </form>

<br>

              <footer>
                      <div>&copy;<script>
                      document.write(new Date().getFullYear());
                      </script> John Azzam, s3767649 and individually created. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
                      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
                      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
                    </footer>

                  </body>
                  </html>
