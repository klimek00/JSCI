<!DOCTYPE html>
<html>
  <head>
    <?php
     include 'head_HTML.html';
    ?>
    <script src="./js/calcKCAL.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
      include 'header.php';
      include 'kcalForm.php';
      include 'footer.html';
    ?>
    <div class="container text-center" style="margin-top: 100px;">
      <h1 class="display-4">Oblicz swoje dzienne zapotrzebowanie kaloryczne!</h1>
      <p class="mt-5 lead">Kalkulator kalorii umożliwia szybkie i wygodne wyliczenie własnego dziennego zapotrzebowania na kalorie oraz poznanie wskaźnika BMR. Wskaźnik podstawowej przemiany materii (Basal Metabolic Rate, BMR) jest minimalnym dziennym zapotrzebowaniem energetycznym koniecznym do podtrzymania podstawowych procesów życiowych ciała w spoczynku.</p>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><span style="color: red">*</span> Płeć</span>
          </div>
          <select class="form-control" id="sexk">
            <option value="f">Kobieta</option>
            <option value="m">Mężczyzna</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><span style="color: red">*</span> Wiek</span>
          </div>
          <input class="form-control" type="number" name="agek" id="agek" min="1" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><span style="color: red">*</span> Wzrost (cm)</span>
          </div>
          <input class="form-control" type="number" name="grwk" id="grwk" min="100" equired>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><span style="color: red">*</span> Waga (kg)</span>
          </div>
          <input class="form-control" type="number" name="wghk" id="wghk" min="1" required>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><span style="color: red">*</span>Aktywność</span>
          </div>
          <select class="form-control" id="activek" name="activek">
            <option value="1.2">Praca siedząca. Brak aktywności</option>
            <option value="1.3">Praca siedząca. Niska aktywność, trening raz w tygodniu</option>
            <option value="1.4">Praca siedząca. Niska aktywność, trening dwa razy w tygodniu</option>
            <option value="1.5">Praca siedząca. Średnia aktywność, trening trzy razy w tygodniu</option>
            <option value="1.6">Praca siedząca. Średnia aktywność, trening cztery razy w tygodniu</option>
            <option value="1.7">Praca fizyczna. Wysoka aktywność, trening trzy razy w tygodniu</option>
            <option value="1.8">Praca fizyczna. Wysoka aktywność, trening cztery razy w tygodniu</option>
            <option value="2.2">Bardzo wysoka aktywność (zawodowi sportowcy, osoby codziennie trenujące)</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><span style="color: red">*</span> Cel treningowy</span>
          </div>
          <select class="form-control" id="goalk" name="goalk">
            <option value="-300">Zrzucenie kilogramów</option>
            <option value="0">Pozostawienie wagi bez zmian</option>
            <option value="300">Zbudowanie masy</option>
          </select>
        </div>
        <input class="btn btn-primary" style="width: 400px" type="submit" name="calc" value="Oblicz" onclick="calcKCAL(); draw()">
    </div>
    <div class="container mt-5" id="kcalresult" style="display: none;">
      <h4 class="text-secondary font-weight-normal">Twoja podstawowa przemiana materii (BMR):</h4>
      <h1 class='text-primary' id="bmrresult"></h1>
      <h4 class="text-secondary font-weight-normal">Aby cel treningowy się spełnił twoje zapotrzebowanie kaloryczne wynosi*:</h4>
      <h1 class='text-primary' id="cpmresult"></h1>
      <h5 id="%demand"></h5>
      <div class="chart-container" style="position: relative; height:40px; width:80px; margin: 0 auto;">
          <canvas id="chart"></canvas>
      </div>
      <p>*Są to orientacyjne wyliczenia, które mogą różnić się u poszczególnych osób ze względu na indywidualne cechy i parametry dodatkowe.</p>
    </div>
    <?php include 'footer.html'; ?>
  </body>
</html>
