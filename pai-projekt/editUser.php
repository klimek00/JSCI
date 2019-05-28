<?php session_start();
if(isset($_GET['id']) && isset($_SESSION['id'])) {
    $idEdit = $_GET['id'];
    $id = $_SESSION['id'];
    
    try {
      $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
      echo "Error!".$e->getMessage();
    } 
    $q = "SELECT * FROM users WHERE ID = $idEdit";
    $result = $db->query($q);
?>
<div class="modal-header">
  <h3 class="modal-title"> Change details of user ID: <?php echo $idEdit; ?> ?</h3>
  <button type="button" class="close" data-dismiss="modal">X</button>
</div>
<div class="modal-body">
  <div class="form-group mx-auto text-center">
      <?php 
        foreach($result as $item) {
            echo "
            <form action='editUser.php?id=$idEdit' method='post'>
              <label for='login'>Login:</label>
              <input type='text' class='form-control' name='login' value='".$item['login']."'>
              <label for='email'>e-mail:</label>
              <input type='email' class='form-control' name='email' value='".$item['email']."'>
              <label for='dateOfBirth'>Date of birth:</label>
              <input type='date' class='form-control' name='dateOfBirth' value='".$item['dateOfBirth']."'>
              <label for='gender'>Gender:</label>
              <input type='text' class='form-control' name='gender' value='".$item['gender']."'>
              <label for='permission'>Permission:</label>
              <input type='text' class='form-control' name='permission' value='".$item['perm']."'><br>
              <input type='submit' name='submit' value='Update' class='btn btn-outline-dark'>
          </form>
            ";
        }
    ?>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
</div>
<?php       
}
else {
    ?>
<div class="modal-header">
        <h1 class="modal-title">WARNING!</h1>
</div>
<div class="modal-body">
  <div class="form-group mx-auto text-center">
      <h1><small>YOUR ACTIVITY HAS BEEN SAVED TO DATABASE AND WILL BE SENT TO GOVERMENT OF YOUR COUNTRY. IF YOU HAVE DONE THAT BY A MISTAKE, PLEASE CLOSE THIS WINDOW IMMEDIATELY. ( ͡° ͜ʖ ͡°)</small></h1>
  </div>
</div>
<div class="modal-footer"></div>
<?php
}
if(isset($_POST['submit'])) {
    if($_POST['login'] != "")
        $newLogin = $_POST['login'];
    if($_POST['email'] != "")    
        $newEmail = $_POST['email'];
    $newDateOfBirth = $_POST['dateOfBirth'];
    $newGender = $_POST['gender'];
    $newPermission = $_POST['permission'];
    
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
               try {
                   $sql = "UPDATE `users` SET `login`='$newLogin',`email`='$newEmail',`dateOfBirth`='$newDateOfBirth',`gender`='newGender',`perm`='$newPermission' WHERE id=$idEdit";
                   $result = $db->query($sql);
                   if (!$result) {
                       echo "<SCRIPT type='text/javascript'>
                             alert('Error!!!');
                             window.location.replace(\"adminPanel.php\");
                             </SCRIPT>";
                   } else {
                        header("location: adminPanel.php?action=success"); 
                   }
               } catch (PDOException $e) {
                   echo "Error!".$e->getMessage();
               }  
          }
      }
    $db = NULL;
}
?>
<script type="text/javascript">
    $('#editModal').on('hidden.bs.modal', function() {
    $(this).removeData('bs.modal');
});
</script>