<?php session_start();
  if(!isset($_GET["action"]))
      header("Location: adminPanel.php?action=users");
  if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    try {
      $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
      echo "Error!".$e->getMessage();
    }
      $query = "SELECT * FROM users WHERE ID = $id AND perm = 'admin'";
      $result = $db->query($query);
      if (!$result) {
        header("Location: index.php");
      } else {
        $rows = $result->fetch();
        if ($rows) {
?>
<!DOCTYPE html>
<html>
  <head>
      <?php include 'head_HTML.html'; ?>
  </head>
  <body>
    <div class="d-flex">
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a class="p-2 text-dark" href="adminPanel.php">Admin panel</a></div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action bg-light" href="index.php">Index</a>
      </div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action bg-light" href="adminPanel.php?action=users">List of users</a>
      </div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action bg-light" href="adminPanel.php?action=badlogin">Bad login</a>
      </div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action bg-light" href="logout.php">Logout</a>
      </div>
    </div>
    <div id="page-content-wrapper">
      <?php
        if (isset($_GET["action"])) {
          if ($_GET["action"] == 'users') {
            include 'usersList.php';
          } else if ($_GET["action"] == 'badlogin') {
            include 'badLogin.php';
          } else if ($_GET['action'] == 'success') {
            echo "<div class='container-fluid mt-4'>
                <h1 class='text-center'>Action performed succesfully!</h1>
                </div>
                ";
          }
        }
      ?>
    </div>

  </div>
  </body>
</html>
<?php
} else {
  header("Location: index.php");
}
  }
$db = null;
} else {
  header("Location: index.php");
}
?>
