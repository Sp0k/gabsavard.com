<?php

if($_POST["message"]) {mail("contact@gabsavard.com", $_POST["subject"],$_POST["message"]. "\n\nFrom: ".$_POST["email"]);}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GS | Contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">

    <!-- Style -->
    <link href="style/base.css" rel="stylesheet">
    <link href="style/contact.css" rel="stylesheet">

    <!-- JS -->
    <script src="scripts/clearForm.js"></script>
    <script defer src="scripts/menu.js"></script>


    <!-- icon -->
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.ico">
  </head>
  <body onload="clearForm();">
    <!-- Nav Bar -->
    <nav>
      <a href="/"><img src="assets/icons/favicon.ico" alt="website's logo">GS</a>
      <input type="checkbox" id="toggler" />
      <label for="toggler" id="hamburger" class="" onclick="Rotating()"><i class="menubar">bar</i><i class="menubar">bar</i><i class="menubar">bar</i></label>
      <div class="menu">
        <ul>
          <li style="text-decoration-line: underline;"><a href="/">Home</a></li>
          <li><a href="projects">Projects</a></li>
          <li><a href="blog">Blog</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="about-me">About</a></li>
        </ul>
      </div>
    </nav>
    
    <hr> 

    <main>
      <div class="left">
        <button class="links" onclick=" window.open('https://github.com/Sp0k')">
          <img class="hover-image" src="assets/icons/github_hover.png" alt="github icon">
          <img class="regular-image" src="assets/icons/github_filled.png" alt="github icon">
          GitHub
        </button>
        <button class="links" onclick=" window.open('https://ca.linkedin.com/in/gabsavard/en')">
          <img class="hover-image" src="assets/icons/linkedin_hover.png" alt="LinkedIn Icon">
          <img class="regular-image" src="assets/icons/linkedin_filled.png" alt="Linkedin icon">
          LinkedIn
        </button>
        <button class="links" onclick=" window.open('https://www.instagram.com/gabsavard_code')">
          <img class="hover-image" src="assets/icons/instagram_hover.png" alt="Instagram icon">
          <img class="regular-image" src="assets/icons/instagram_filled.png" alt="Instagram icon">
          Instagram
        </button>
        <button class="links" onclick=" window.open('https://www.youtube.com/channel/UC1mHeCdycaFQ0aw4jXxLLog')">
          <img class="hover-image" src="assets/icons/youtube_hover.png" alt="YouTube icon">
          <img class="regular-image" src="assets/icons/youtube_filled.png" alt="YouTube icon">
          YouTube
        </button>

        <img src="assets/images/shapes_contact.png" width=300>
      </div>
      <div class="right">
        <form name="contact-form" method="post" action="contact.php">
          <label>Send me a message:</label>
          <input name="email" type="text" placeholder="Email" class="small"></input>
          <input name="subject" type="text" placeholder="Subject" class="small" required></input>
          <textarea name="message" placeholder="Message" class="large" required></textarea>
          <p>Please include your contact information if you wish to reach out</p>
          <input type="submit" value="Send"></input>
        </form>
      </div>
    </main>
    
    <!-- Footer -->
    <footer>
      <div class="foot-container">
        <hr>
        <a href="https://www.instagram.com/gabsavard_code" target="_blank"><img src="assets/icons/instagram.png" alt="instagram logo"></a>
        <a href="https://ca.linkedin.com/in/gabsavard/en" target="_blank"><img src="assets/icons/linkedin.png" alt="LinkedIn logo"></a>
        <a href="https://github.com/Sp0k" target="_blank"><img src="assets/icons/github.png" alt="Github logo"></a>
        <a href="https://www.youtube.com/channel/UC1mHeCdycaFQ0aw4jXxLLog" target="_blank"><img src="assets/icons/youtube.png" alt="YouTube logo"></a>
        <hr>
      </div>
      <p>© 2024 Gabriel Savard. All rights reserved.</p>
    </footer>
  </body>
</html>
