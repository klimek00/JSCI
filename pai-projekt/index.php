<!DOCTYPE html>
<html>
  <head>
    <?php
     include 'head_HTML.html';
    ?>
  </head>
  <body>
    <?php
      session_start();
      include 'header.php';
      include 'main_content.php';
      echo $_SESSION["id"];
      include 'footer.html';
    ?>
  </body>
</html>
