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
      <h1 class="display-4 text-center"> Zdobądź dostęp do wielu nowych funkcji!</h1><br>
          <p class="lead">Użytkownicy posiadający konto mają dostęp do wielu dodatkowych funkcji. Założenie i posiadanie konta w tym serwisie jest bezpłatne! <br> 
              Wypełnij poniższy formularz aby utworzyć konto: <br><br>
                Pola oznaczone symbolem: * są obowiązkowe do wypełnienia aby móc się zarejestrować, pozostałe tylko opcjonalne! 
          </p>
      <form>
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Adres e-mail: </span> 
                </div>
              <input type="email" class="form-control" id="mail" required>*
          </div>
          
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Nazwa użytkownika: </span> 
                </div>
              <input type="text" class="form-control" id="login" required>*
          </div>
          
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Hasło: </span> 
                </div>
              <input type="password" class="form-control" id="login" required>*
          </div>
          
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Powtórz hasło: </span> 
                </div>
              <input type="password" class="form-control" id="login" required>*
          </div>
        
         
          <p class="lead text-danger text-center">Rejestrując się akceptujesz <a href="regulamin.html"> regulamin </a> </p>
          <div class="text-center"> 
              <button type="submit" class="btn btn-primary">Zarejestruj się!</button> 
          </div>
          
        </form>
          
      </div>
      <?php
       include 'footer.html';
      ?>
    </body>
</html>