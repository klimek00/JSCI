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
    ?>
    <div class="container border" style="margin-top: 100px;">

      <?php
        if (isset($_SESSION["id"])) {
            echo $_SESSION["id"];
         }
        
      include 'wykres.php';
            
    ?>
        
    </div>
    <?php
      include 'footer.html';
    ?>
  </body>
</html>
