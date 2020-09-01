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

</head>
<h2>Letters and Postcards</h2>


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

  <?php
$file_handle = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", "rb");

while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode('=', $line_of_text);

print $parts[0]. "<BR>";

}

fclose($file_handle);
    ?>



</body>


              <footer>
                      <div>&copy;<script>
                      document.write(new Date().getFullYear());
                      </script> John Azzam, s3767649 and individually created. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
                      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
                      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
                    </footer>

                  </body>
                  </html>
