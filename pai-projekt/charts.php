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
      if (!$result) {
        header("Location: index.php");
      } else {
        $rows = $result->fetch();
        if ($rows) {
?>
<div class="container-fluid mt-4">
  <h1 class="text-center">Chart results</h1>
  <table class="table-striped table table-bordered mt-4">
    <thead>
      <tr>
        <th>ID</th>
        <th>IDuser</th>
        <th>Date</th>
        <th>BMI Result</th>
      </tr>
    </thead>
    <tbody>
      <?php
        try {
          $conn = new PDO("sqlite:database.sqlite");
          $sql = "SELECT * FROM chart";
          $result = $conn->query($sql);
          if (!$result) {
            echo "<SCRIPT type='text/javascript'>
            alert('Error!!!');
              window.location.replace(\"adminPanel.php\");
            </SCRIPT>";
          } else {
            foreach ($result as $value) {
              echo "<tr>";
              echo "<td>".$value["ID"]."</td>";
              echo "<td>".$value["IDUser"]."</td>";
              echo "<td>".md5($value["date"])."</td>";
              echo "<td>".$value["bmiResult"]."</td>";
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
<div id="deleteModal" class="modal fade text-center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
</div>
<div id="editModal" class="modal fade text-center">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    </div>
  </div>
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
