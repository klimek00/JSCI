<?php
session_start();
if (isset($_SESSION["id"])) {
 ?>
<div class="container-fluid text-center" style="margin-top:70px;">
  <h1 class="text-primary mb-5">Według ostatniego pomiaru, posiadasz prawidłową wagę</h1>
  <h5 class="lead">Jeżeli chcesz utrzymać prawidłową wagę, konieczne jest prowadzenie zdrowego trybu życia. Przede wszystkim powinieneś zrezygnować ze starych nawyków żywieniowych. <br /> Poniżej prezentujemy porady na utrzymanie prawidłowej masy ciała. Pamiętaj jednak aby każdą diete skonsultować z diabetykiem.</h5>
<div class="container mt-5">
  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="./img/food.jpg" alt="posilek">
      <div class="card-body">
        <h4 class="card-title">Nie opuszczaj posiłków</h4>
        <p class="card-text">Unikanie posiłków, może spowolnić Twój metabolizm. W efekcie w późniejszym czasie, jedzenie będzie traktowane przez organizm jako nadwyżka energetyczna i odkładane w postaci tkanki tłuszczowej. Ponadto - pomijanie posiłków, sprzyja późniejszemu przejadaniu się w ciągu dnia i efektowi jo-jo.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="./img/weight.jpg" alt="waga">
      <div class="card-body">
        <h4 class="card-title">Waż się raz w tygodniu</h4>
        <p class="card-text">Regularna kontrola masy ciała, pozwoli uniknąć nieświadomego przyrostu masy ciała. Ubrania, które nosimy również są wskaźnikiem ewentualnego przybierania na wadze, jednak nie tak dokładnym jak cotygodniowe ważenie.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="./img/index.jpg" alt="dziennik">
      <div class="card-body">
        <h4 class="card-title">Prowadź swój dziennik spożywanych posiłków</h4>
        <p class="card-text">Prowadzenie dziennika spożywanych pokarmów, jest dobrym sposobem na trzymaniu w ryzach swojej diety. Bardzo ważne - by prowadzony dziennik był szczery i dokładny. Zapisuj w nim wszystko co jesz i pijesz. Później, taki dziennik może okazać się bardzo pomocny, w określeniu czy zmiana diety nie spowodowała np. Przybrania na wadze.</p>
      </div>
    </div>
  </div>
  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="./img/fitfood.jpg" alt="zdrowe jedzenie">
      <div class="card-body">
        <h4 class="card-title">Odżywiaj się zdrowo</h4>
        <p class="card-text">Staraj się odżywiać różnorodnie, tak by codziennie dostarczyć wszystkie niezbędne składniki odżywcze: witaminy, minerały, kwasy tłuszczowe, aminokwasy i cukry. Pamiętaj o piciu - przynajmniej 2 litry wody w ciągu dnia.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="./img/suplements.jpg" alt="Suplementy">
      <div class="card-body">
        <h4 class="card-title">Suplementuj, jeśli istnieje taka potrzeba</h4>
        <p class="card-text">Jeżeli Twoja dieta nie uzupełnia wszystkich składników mineralnych i witamin, lub masz niedobór innego składnika odżywczego np. Błonnika. Uzupełniaj go odpowiednimi preparatami dostępnymi w aptece. Pamiętaj, ze niedobór któregokolwiek składnika niezbędnego w Twojej diecie, prędzej czy później odbije się na Twoim zdrowiu i samopoczuciu. Lepiej temu zapobiegać, niż leczyć.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="./img/activity.jpg" alt="Aktywność">
      <div class="card-body">
        <h4 class="card-title">Bądź aktywny</h4>
        <p class="card-text">Aktywność fizyczna jest niezbędna dla utrzymania nie tylko prawidłowej wagi, ale zdrowia i dobrego samopoczucia. Ćwicz, uprawiaj sporty, a jeżeli nie masz na to codziennie możliwości, to przynajmniej nie rezygnuj z chodzenia. Już pół godzinny spacer będzie z korzyścią dla Twojego kręgosłupa, serca, pozwoli Ci się zrelaksować. Bądź aktywny każdego dnia.</p>
      </div>
    </div>
  </div>
</div>
</div>
<?php } else {
  header("Location: ../index.php");
} ?>
