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
      <div class="container">
      <h1 class="display-4 text-center"> Zaloguj się aby w pełni korzystać z mozliwości kalkulatora!</h1>
      <form>
          <div class="form-group">
          
            <label for="login">Wprowadź login poniżej:</label>
              <input type="text" class="form-control" id="login">
          </div>
          <div class="form-group">
               <label for="password">Wprowadź hasło poniżej:</label>
              <input type="password" class="form-control" id="password">
          </div>
          <div class="text-center">
              <button type="submit" class="btn btn-primary">Zaloguj!</button> 
          </div>
        </form>
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