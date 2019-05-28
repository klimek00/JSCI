<?php session_start();
if(isset($_GET['id']) && isset($_SESSION['id'])) {
    $idDel = $_GET['id'];
    $id = $_SESSION['id'];
?>
<div class="modal-header">
  <h3 class="modal-title"> Are you sure that you want to delete user ID: <?php echo $idDel; ?> ?</h3>
  <button type="button" class="close" data-dismiss="modal">X</button>
</div>
<div class="modal-body">
  <div class="form-group mx-auto text-center">
      <?php echo "<form action='delUser.php?id=$idDel' method='post'>"; ?>
          <input type="submit" name='btn' value="Yess" class='btn btn-outline-dark'>
          <input type="submit" name='btn' value="HeckNo" class='btn btn-outline-dark'>
      </form>
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
if(isset($_POST['btn']) && $_POST['btn'] == 'Yess') {
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
               $sql = "DELETE FROM users WHERE ID = $idDel";
               $result = $db->query($sql);
               if (!$result) {
                   echo "<SCRIPT type='text/javascript'>
                         alert('Error!!!');
                         window.location.replace(\"adminPanel.php\");
                         </SCRIPT>";
               } else {
                   $sql2 = "DELETE FROM chart WHERE IDUser = $idDel";
                   $result = $db->query($sql2);
                   if (!$result) {
                       echo "<SCRIPT type='text/javascript'>
                             alert('Error!!!');
                             window.location.replace(\"adminPanel.php\");
                             </SCRIPT>";
                   } else {
                       header("location: adminPanel.php?action=success"); 
                   }
               }
           } catch (PDOException $e) {
               echo "Error!".$e->getMessage();
           }  
            
          }
      }
    $db = NULL;
} else if (isset($_POST['btn']) && $_POST['btn'] == 'HeckNo') {
    header("location: adminPanel.php");   
}
?>
<script type="text/javascript">
    $('#deleteModal').on('hidden.bs.modal', function() {
    $(this).removeData('bs.modal');
});
</script>