<?php
if (isset($_SESSION["id"])) {
 ?>
<div class="container-fluid text-center" style="margin-top:70px;">
  <h1 class="text-primary mb-5">Według ostatniego pomiaru, posiadasz otyłość pierwszego stopnia</h1>
  <h5 class="lead">Z otyłością mamy do czynienia, gdy tkanka tłuszczowa przekracza 20% masy ciała u mężczyzn lub 25% masy ciała u kobiet. Do głównych przyczyn jej powstawania można zaliczyć nieodpowiednią dietę oraz brak ruchu. Niestety otyłość niesie ze sobą wiele poważnych zagrożeń dla zdrowia i życia (choroby układu krążenia, cukrzyca typu II, choroby zwyrodnieniowe stawów) <br /> Poniżej prezentujemy porady na zdrowe zrzucenie paru kilogramów. Pamiętaj jednak aby każdą diete skonsultować z diabetykiem.</h5>
<div class="container mt-5">
  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="./img/fitfood.jpg" alt="Dieta">
      <div class="card-body">
        <h4 class="card-title">Zbilansowana dieta</h4>
        <p class="card-text">Podstawowe zasady zbilansowanej diety stawiają na regularność: 4-5 posiłków co około 3 godziny, odpowiednia wielkość porcji. Kiedy rzadziej przyjmujemy duże posiłki, nasz organizm broni się przed niedoborem pokarmu odkładając tkankę tłuszczową. Ważne jest zaopatrzenie swojej lodówki w dużą ilość warzyw, owoców, ryb czy lekkiego nabiału. Pomocne będą także zdrowe zamienniki żywności.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="./img/activity.jpg" alt="Ćwiczenia">
      <div class="card-body">
        <h4 class="card-title">Ćwiczenia fizyczne</h4>
        <p class="card-text">Każdy dietetyk czy trener potwierdzi tezę, że w zrzucaniu kilogramów niezbędne jest połączenie odpowiedniej diety z aktywnością fizyczną. Długofalowych korzyści nie przyniosą ani same ćwiczenia, ani wyłącznie dieta. Przygodę z aktywnością fizyczną można zacząć w domu, w parku czy na siłowni. Warto poświecić minimum godzinę 3 razy w tygodniu na gimnastykę.</p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="./img/weight2.jpg" alt="Waga">
      <div class="card-body">
        <h4 class="card-title">Stopniowe zrzucanie wagi</h4>
        <p class="card-text">Aby cały proces odchudzania był zdrowy i przyniósł trwały efekt, należy kaloryczność posiłków zmniejszać stopniowo. Racjonalne chudnięcie to utrata nie więcej niż 1 kilograma na tydzień. Głodzenie się i stosowanie diety, podczas której ciągle chodzimy nienajedzeni i spięci na pewno nie przyniesie oczekiwanych wyników, a zapewne również będziemy musieli się zmierzyć z efektem „jojo”.</p>
      </div>
    </div>
  </div>
  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="./img/dna.jpg" alt="DNA">
      <div class="card-body">
        <h4 class="card-title">Sprawdź, czy otyłość nie wynika z choroby</h4>
        <p class="card-text">Otyłość często jest wynikiem poważnych problemów ze zdrowiem. Jeśli dodatkowym kilogramom towarzyszą inne niepokojące objawy bądź – mimo stosowania zdrowych zasad żywieniowych – waga ani drgnie, warto udać się do lekarza i wykonać badanie krwi, aby wykluczyć choroby mogące wpływać na gospodarkę węglowodanową czy hormonalną. </p>
      </div>
    </div>
  </div>
</div>
</div>
<?php } else {
  header("Location: ../index.php");
} ?>
