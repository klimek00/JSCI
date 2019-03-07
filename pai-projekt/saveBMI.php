<?php
session_start();
  if (isset($_GET["bmi"])) {
    $bmi = $_GET["bmi"];
    if ($bmi == "undefined" || $bmi == "null") {
      echo '
      <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Wystąpił problem z zapisem. Spróbuj ponownie.</strong>
      </div>
      ';
    } else {
    $userID = $_SESSION["id"];
    $date = date("Y-m-d H:m:s");
    try {
      $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
      echo "Error!".$e->getMessage();
    }
    $query = "INSERT INTO chart ('IDUser','date','bmiResult') VALUES ('$userID','$date','$bmi')";
    $result = $db->query($query);
    if ($result === false) {
      echo '
      <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Wystąpił problem z zapisem. Spróbuj ponownie.</strong>
      </div>
      ';
    } else {
      echo '
      <div class="alert alert-success alert-dismissible fade show" style="margin-top: 10px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Sukces!</strong> Zapisano pomyślnie.
      </div>
      ';
    }
    $db = null;
  }
  } else {
    echo '
    <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Wystąpił problem z zapisem. Spróbuj ponownie.</strong>
    </div>
    ';
}

?>
