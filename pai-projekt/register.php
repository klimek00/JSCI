<?php
session_start();
if (!isset($_SESSION["id"])){ ?>
<!DOCTYPE html>
<html>
  <head>
    <?php
     include 'head_HTML.html';
    ?>
      <script src="js/checkPasswd.js"></script>
  </head>
  <body>
    <?php
      include 'header.php';
    ?>
      <div class="container" style='margin-top:100px'>
      <h1 class="display-4 text-center"> Zdobądź dostęp do wielu nowych funkcji!</h1><br>
          <p class="lead">Użytkownicy posiadający konto mają dostęp do wielu dodatkowych funkcji. Założenie i posiadanie konta w tym serwisie jest bezpłatne! <br>
              Wypełnij poniższy formularz aby utworzyć konto: <br><br>
                Pola oznaczone symbolem: * są obowiązkowe do wypełnienia aby móc się zarejestrować, pozostałe tylko opcjonalne!
          </p>
      <form method='post'>
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Adres e-mail:* </span>
                </div>
              <input type="email" class="form-control" name="mail" id="mail" required>
          </div>

          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nazwa użytkownika:* </span>
                </div>
              <input type="text" class="form-control" name="login" id="login" required>
          </div>

          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Hasło:* </span>
                </div>
              <input type="password" class="form-control" name="passwd" id="passwd" onchange="formCheck();" required>
          </div>

          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Powtórz hasło:* </span>
                </div>
              <input type="password" class="form-control" name="passwdRep" id="passwdRep" onchange="formCheck();" required>
          </div>

          <div class='container' id='passwdNotEqual' style="display: none">
                <div class='alert alert-danger'>
                    <strong>Uwaga!</strong> Hasła się nie zgadzają! Tekst zniknie, jeżeli będą sobie równe!</a>
                </div>
          </div>

          <div class='container' id='passwdTooShort' style="display: none">
                <div class='alert alert-warning'>
                    <strong>Uwaga!</strong> Hasło musi mieć co najmniej 4 litery! Tekst zniknie, jeżeli będą sobie równe!</a>
                </div>
          </div>

          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Data urodzenia: </span>
                </div>
              <input type="date" class="form-control" name="dateOfBirth" id="dateOfBirth">
          </div>

<!--
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <select class="form-control" name="gender">
                        <option value="Not choiced">Wybierz płeć</option>
                        <option value="women">Kobieta</option>
                        <option value="men">Mężczyzna</option>
                        <option value="what">Rasa do gazu</option>
                    </select>
                </div>
          </div>
-->

          <p class="lead text-danger text-center">Rejestrując się akceptujesz <a href="reg.php"> regulamin </a> </p>
          <div class="text-center">
              <input type="submit" name="submit" class="btn btn-primary" value="Zarejestruj się!"/>
          </div>

        </form>
      <?php
        if(isset($_POST['submit'])) {
            $login = $_POST['login'];
            $passwd = $_POST['passwd'];
            $mail = $_POST['mail'];
            $passwdRep = $_POST['passwdRep'];
            $dateOfBirth = $_POST['dateOfBirth'];
            $date = date("d/m/Y");

            //if(isset($_POST['dateOfBirth']) && $_POST['dateOfBirth'] == NULL)
            if(strlen($passwd) >= 4 && $passwd == $passwdRep) {
                $database = new PDO('sqlite:database.sqlite');
                $loginCheck = "SELECT 'login' FROM users WHERE login='$login'";
                $loginCheckRes = $database->query($loginCheck);
                $loginInDatabase = $loginCheckRes->fetch(); 

                if ($loginInDatabase != 0) {
                    echo "<div class='alert alert-danger container' style='margin-top: 10px;'>
                    <strong>Uwaga! </strong> Użytkownik już sobie istnieje.";
                    echo "</div>";
                } else {
                    $mailCheck = "SELECT 'email' FROM users WHERE email='$mail'";
                    $mailCheckRes = $database->query($mailCheck);
                    $mailInDatabase = $mailCheckRes->fetch();
                    if($mailInDatabase != 0) {
                        echo "<div class='alert alert-danger container' style='margin-top: 10px;'>
                        <strong>Uwaga! </strong> Taki email już jest zajęty!";
                        echo "</div>";
                    } else {
                        $sql = "INSERT INTO users ('login','passwd','email','registerDate', 'dateOfBirth') VALUES ('$login','$passwd','$mail','$date', '$dateOfBirth')";
                        $result = $database->query($sql);

                        if($result == false) {
                            echo "<div class='alert alert-danger container' style='margin-top: 10px;'>
                            <strong>Uwaga! </strong> Błąd rejestracji.";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-success container' style='margin-top: 10px;'>
                            <strong>Sukces! </strong>Użytkownik został dodany.";
                            echo "</div>";
                        }
                    }
                  }
                $database = NULL;
            }
        }
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
