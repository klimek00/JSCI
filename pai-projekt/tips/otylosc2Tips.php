<?php
if (isset($_SESSION["id"])) {
 ?>
<div class="container-fluid text-center" style="margin-top:70px;">
  <h1 class="text-primary mb-5">Według ostatniego pomiaru, posiadasz otyłość drugiego stopnia</h1>
  <h5 class="lead">Otyłość drugiego stopnia jest niebezpieczna dla zdrowia. Skontaktuj się jak z lekarzem - diabetykiem w celu ustalenia diety oraz z trenerem personalnym, aby stworzyć plan treningowy.</h5>

</div>
<?php } else {
  header("Location: ../index.php");
} ?>
