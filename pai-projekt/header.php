<header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
          <h5 class="my-0 mr-md-auto font-weight-normal"><a class="p-3 text-dark" href="index.php">Kalkulator BMI Online</a></h5>
    <nav class="my-2 my-md-0 mr-md-3 ">
      <?php
        $link = $_SERVER['REQUEST_URI'];
        echo "<a class='p-3 text-dark' href='$link?page=calc'>Oblicz BMI</a>";
      ?>
      <a class="p-3 text-dark" href="#">Pokaż wskazówki</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Zaloguj się!</a>
  </div>
</header>
