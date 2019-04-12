<?php
  if (isset($_SESSION["id"])) {
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
<div class="container-fluid mt-4">
  <h1 class="text-center">Bad Logins</h1>
  <table class="table-striped table table-bordered mt-4">
    <thead>
      <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Date</th>
        <th>IP</th>
      </tr>
    </thead>
    <tbody>
      <?php
        try {
          $conn = new PDO("sqlite:database.sqlite");
          $sql = "SELECT * FROM badLogin";
          $result = $conn->query($sql);
          if ($result === false) {
            echo "<SCRIPT type='text/javascript'>
            alert('Error!!!');
              window.location.replace(\"adminPanel.php\");
            </SCRIPT>";
          } else {
            foreach ($result as $value) {
              echo "<tr>";
              echo "<td>".$value["ID"]."</td>";
              echo "<td>".$value["login"]."</td>";
              echo "<td>".$value["date"]."</td>";
              echo "<td>".$value["ip"]."</td>";
              echo "</tr>";
            }
          }
        } catch (PDOException $e) {
          echo "Error!".$e->getMessage();
        }

      ?>
    </tbody>
  </table>
</div>
<?php
$conn = null;
} else {
  header("Location: index.php");
}
  }
$db = null;
} else {
  header("Location: index.php");
}
?>
