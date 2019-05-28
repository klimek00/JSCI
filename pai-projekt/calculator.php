
<script src="./js/calcBMI.js" charset="utf-8"></script>
<div class="modal-header">
  <h3 class="modal-title"> Oblicz swoje BMI!</h3>
  <button type="button" class="close" data-dismiss="modal">X</button>
</div>
<div class="modal-body">
  <div class="form-group mx-auto text-center">
      <label for="sex" class="mr-sm-2">Twoja płeć:</label>
      <div class="radio">
        <label><input type="radio" name="sex" id="m"> Mężczyzna</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="sex" id="w"> Kobieta</label>
      </div>
  </div>
  <div class="form-group mx-auto text-center">
    <label for="weight" class="mr-sm-2">Twoja waga: (w kg)</label>
    <input type="number" class="form-control mb-2 mr-sm-2" id="weight">
  </div>
  <div class="form-group mx-auto text-center">
      <label for="growth" class="mr-sm-2">Twój wzrost: (w cm)</label>
      <input type="number" class="form-control mb-2 mr-sm-2" id="growth">
  </div>
  <div class="text-center">
      <button type="button" class="btn btn-primary btm-md" onClick="calcBMI()">Oblicz!</button>
  </div>
  <br>
    <p class="h4" id="userBMI"></p>
</div>
<div class="alert alert-danger" style="display: none" id="alert">
  Wypełnij wszystkie pola!!!
</div>
<div id="infoSave"></div>
<h5 class="p-3 text-dark">Niewłaściwe BMI? <a href="calcKCAL.php">Oblicz dzienne zapotrzebowanie kaloryczne</a></h5>
<div class="modal-footer">
  <?php
    session_start();
    if (isset($_SESSION["id"])) {
      echo '<button type="button" class="btn btn-default" onClick="saveBMI()">Zapisz</button>';
    }
  ?>
  <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="clearBMI()">Zamknij</button>
</div>
