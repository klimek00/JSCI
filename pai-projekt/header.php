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
      <a class="dropdown-toggle btn btn-outline-primary" href="#" id="navbardrop" data-toggle="dropdown">Więcej opcji</a>
        <div class="dropdown-menu">
          <?php
          $id = $_SESSION["id"];
          try {
            $db = new PDO("sqlite:database.sqlite");
          } catch (PDOException $e) {
            echo "Error!".$e->getMessage();
          }
            $query = "SELECT * FROM users WHERE ID = $id AND perm = 1";
            $result = $db->query($query);
            if ($result === false) {
              echo 'Błąd!!!';
            } else {
              $rows = $result->fetch();
              if ($rows != false) {
                echo '<a class="dropdown-item" href="adminPanel.php">Panel administratora</a>';
              }
            }
          ?>
          <a class="dropdown-item" href="#">Historia</a>
          <!-- <a class="dropdown-item" href="#">Ustawienia</a> -->
          <a class="dropdown-item" href="logout.php">Wyloguj</a>
        </div>
    </nav>
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
