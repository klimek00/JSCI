<?php  if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    try {
      $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
      echo "Error!".$e->getMessage();
    }
      $query = "SELECT * FROM users WHERE ID = $id AND perm = 'admin'";
      $result = $db->query($query);
      if ($result === false) {
        header("Location: index.php");
      } else {
        $rows = $result->fetch();
        if ($rows != false) {
?>
<h1>XD</h1>
<?php } else {
  header("Location: index.php");
}
  }
$db = null;
} else {
  header("Location: index.php");
}
?>
