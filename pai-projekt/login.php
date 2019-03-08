<?php
session_start();
if (!isset($_SESSION["id"])){ ?>
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
      <div class="container" style="margin-top: 100px;">
      <h1 class="display-4 text-center"> Zaloguj się aby w pełni korzystać z mozliwości kalkulatora!</h1>
      <form action="" method="post">
          <div class="form-group">

            <label for="login">Wprowadź nazwę użytkownika poniżej:</label>
              <input type="text" class="form-control" name="login" id="login">
          </div>
          <div class="form-group">
               <label for="password">Wprowadź hasło poniżej:</label>
              <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Zaloguj!</button>
          </div>
        </form>
      <?php
        $mess ='
        <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Wypełnij wszystkie pola!!!</strong>
        </div>
        ';
        if (isset($_POST["submit"])) {
          if (isset($_POST["login"]) && isset($_POST["password"])) {
            $login = $_POST["login"];
            $passwd = $_POST["password"];
            if (empty($login) || empty($passwd)) {
              echo $mess;
            } else {
            try {
              $db = new PDO("sqlite:database.sqlite");
            } catch (PDOException $e) {
              echo "Error!".$e->getMessage();
            }
            $query = "SELECT id, login, passwd FROM users WHERE login = '$login' AND passwd ='$passwd'";
            $result = $db->query($query);
            if ($result === false) {
              echo '
              <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Wystąpił problem z logowaniem. Spróbuj ponownie.</strong>
              </div>
              ';
            } else {
              $rows = $result->fetch();
              if ($rows === false) {
                echo '
                <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Login lub hasło jest niepoprawne</strong>
                </div>
                ';
                require 'findIP.php';
                $date = date("Y-m-d H:i:s");
                $ip = getRealIpAddr();
                $sql = "INSERT INTO badLogin ('login', 'date', 'ip') VALUES ('$login','$date','$ip')";
                $result = $db->query($sql);
              } else {
                $id = (int)$rows["ID"];
                $_SESSION["id"] = $id;
                header("Location: index.php");
                  
              }
            }
            $db = null;
          }
          } else {
            echo $mess;
          }
        }
      ?>
      <div class="margin-top-bottom-20px text-center">
          <h1 class="lead">A jeżeli jeszcze nie masz konta to możesz je szybko założyć klikając w przycisk poniżej:</h1>
          <a href="register.php" class="btn btn-secondary text-center">Zarejestruj się!</a>
  </div>
  </div>
    <?php
      include 'footer.html';
    ?>
  </body>
</html>
<?php } else {
  header("Location: index.php");
} ?>
