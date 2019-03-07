<?php session_start(); ?>
<header class="fixed-top">
<?php
  if (isset($_SESSION["id"]) && !empty($_SESSION["id"])) {
?>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-3 text-dark" href="index.php">Kalkulator BMI Online</a></h5>
<nav class="my-2 my-md-0 mr-md-3 navbar-expand">

    <a class='p-3 text-dark' href="calculator.php" data-toggle="modal" data-target="#theModal">Oblicz BMI</a>
    <a class="p-3 text-dark" href="tips.php">Pokaż wskazówki</a>

</nav>
<a class="btn btn-outline-primary" href="logout.php">Wyloguj</a>
</div>
<?php
  } else {
?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
          <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-3 text-dark" href="index.php">Kalkulator BMI Online</a></h5>
    <nav class="my-2 my-md-0 mr-md-3 navbar-expand">

        <a class='p-3 text-dark' href="calculator.php" data-toggle="modal" data-target="#theModal">Oblicz BMI</a>
        <a class="p-3 text-dark" href="tips.php">Pokaż wskazówki</a>

    </nav>
    <a class="btn btn-outline-primary" href="login.php">Zaloguj się!</a>
  </div>
  <?php
  }
  ?>
</header>
<div id="theModal" class="modal fade text-center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>
