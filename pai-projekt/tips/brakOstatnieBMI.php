<div class="container-fluid text-center text-primary jumbotron jumbotron-fluid bg-white" style="margin-top:70px;">
    <h1><small>Niestety ale nie byliśmy w stanie znaleźć Twojego BMI!</small></h1> <br>
    <?php
      if (isset($_SESSION["id"])) {
        echo '<h2 class="mt-4 mb-4"><small>Zapisz swoje pierwsze wyliczenie BMI.</small></h2><br>';
      } else {
        echo '<h2 class="mt-4 mb-4"><small>Próbowałeś <a href="./login.php">zalogowania się?</a></small></h2><br>';
      }
    ?>
</div>
<div class="bg-primary container-fluid text-center text-primary jumbotron jumbotron-fluid lead">
    <span class="text-white lead" style="font-size: 25px;">Część funkcji naszej aplikacji możesz przetesować pozostająć Gościem!</span><br>
    <a class="m-4 btn btn-outline-light w-25" href="calculator.php" data-toggle="modal" data-target="#theModal">Oblicz BMI</a>
    <a class="m-4 btn btn-outline-light w-25" href="calcKCAL.php">Oblicz zapotrzebowanie kaloryczne</a><br>
    <span class="text-white lead m-4" style="font-size: 25px;">Jednak część funkcjonalności wymaga zalogowania się!</span><br>
    <a href="#zalety" class="text-white m-4">Zobacz co możesz zyskać rejestrując się!</a><br>
    <a class="m-4 btn btn-outline-light w-25" href="login.php">Jeżeli masz już konto - Zaloguj się</a>
    <a class="m-4 btn btn-outline-light w-25" href="register.php">Jeżeli jeszcze go nie masz - Załóż je</a><br>
</div>
<div class="bg-white container-fluid text-center text-primary jumbotron jumbotron-fluid lead" id="zalety">
    <span class="display-4 mx-4">Poznaj siebie jeszcze bardziej!</span> <br><br>
    <span class="mx-4 px-4 lead" style="font-size: 25px;">Dla zarejestrowanych użytkowników udostępniamy wykresy z historią wyników BMI: </span><br>
    <img src="img/history.PNG" class="mx-auto d-block mx-4 w-50">

</div>
