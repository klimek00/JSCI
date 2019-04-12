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
  <h1 class="text-center">List of users</h1>
  <table class="table-striped table table-bordered mt-4">
    <thead>
      <tr>
        <th>ID</th>
        <th>Login</th>
        <th>Password</th>
        <th>Email</th>
        <th>Register date</th>
        <th>Date of birth</th>
        <th>Gender</th>
        <th>Permission</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
        try {
          $conn = new PDO("sqlite:database.sqlite");
          $sql = "SELECT * FROM users";
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
              echo "<td>".md5($value["passwd"])."</td>";
              echo "<td>".$value["email"]."</td>";
              echo "<td>".$value["registerDate"]."</td>";
              echo "<td>".$value["dateOfBirth"]."</td>";
              echo "<td>".$value["gender"]."</td>";
              echo "<td>".$value["perm"]."</td>";
              // echo "<td><a href='modUser.php?id=".$value["ID"]."'>Modify</a> <br> <a href='delUser.php?id=".$value["ID"]."'>Delete</a></td>";
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
