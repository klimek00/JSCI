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
<script type="text/javascript">
  if (!confirm('Are you sure?')){
    window.location.replace("adminPanel.php");
  }
</script>
<?php
  try {
    $ident = $_GET["id"];
    $db = new PDO ("sqlite:database.sqlite");
    $sql = "DELETE FROM users WHERE ID = $ident";
    $result = $db->query($sql);
    if ($result === false) {
      echo "<SCRIPT type='text/javascript'>
      alert('Error!!!');
        window.location.replace(\"adminPanel.php\");
      </SCRIPT>";
    } else {
      $sql2 = "DELETE FROM chart WHERE IDUser = $ident";
      $result = $db->query($sql2);
      if ($result === false) {
        echo "<SCRIPT type='text/javascript'>
        alert('Error!!!');
          window.location.replace(\"adminPanel.php\");
        </SCRIPT>";
      } else {
        echo "<SCRIPT type='text/javascript'>
        alert('Delete success!');
          window.location.replace(\"adminPanel.php?action=in\");
        </SCRIPT>";
      }
    }
  } catch (PDOException $e) {
      echo "Error!".$e->getMessage();
  }

?>
<!-- <?php
} else {
  header("Location: index.php");
}
  }
$db = null;
} else {
  header("Location: index.php");
}
?> -->
