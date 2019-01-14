<!DOCTYPE html>
<html>
  <head>
    <?php
     include 'head_HTML.html';
    ?>
  </head>
  <body>
    <?php

      include 'header.php';
      if (isset($_GET["page"]) && $_GET["page"] == 'calc') {
        include 'calculator.php';
      } else {
      include 'main_content.html';
          include 'carousel.php';
    }
      include 'footer.html';
    ?>
  </body>
</html>
