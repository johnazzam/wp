<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment 2 - s3767649</title>
<link rel="stylesheet" href="styles.css">

<!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>

  </head>



  <body>



  <header>
  <div>ANZAC Douglas Raymond Baker - Letters Home</div>
  <img src="../image1.jpg" alt="D . R. Baker F . Co one of the soldiers photographed in The Queenslander Pictorial supplement to The Queenslander 1914.jpg">
  </header>




  <nav>
    <div id="navbar">
    <a href="#home">Home</a>
    <a href="#Introduction">Introduction</a>
    <a href="#Letters and Post Cards">Letters and Post Cards</a>
    <a href="#Action Places">Action Places</a>
    <a href="#Links to related materials">Links to related materials</a>
    <a href="#Comments">Comments</a>
    </div>
  </nav>
  <script>
  // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>



  <main>
    <article id='Website Under Construction'>
    </article>





  </main>





  <footer>
    <div>&copy;<script>
      document.write(new Date().getFullYear());
      </script> John Azzam, s3767649 and Individual created. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

  </body>
  </html>
