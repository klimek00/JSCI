<?php
session_start();
if (isset($_SESSION["id"])) {
 ?>
<!DOCTYPE html>
<html>
  <head>
    <?php
     include 'head_HTML.html';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0" charset="utf-8"></script>
  </head>
  <body onload="draw()">
    <?php
      include 'header.php';
    ?>
    <div class="container mt-5">
      <h3 class="text-center">Historia BMI</h3>
    <?php
      include 'chartjsHistory.php';
    ?>

    </div>
    <?php
      include 'footer.html';
    ?>
  </body>
</html>
<?php } else {
  header("Location: index.php");
} ?>
