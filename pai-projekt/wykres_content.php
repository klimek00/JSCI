<?php
    session_start();
         
        
try {
        $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
        echo "Error!".$e->getMessage();
    }
    
if(isset($_SESSION["id"])){
   $idUser = $_SESSION["id"];
}
else{
    echo "Brak uprawnień";
}
            
    $query = "select date, bmiResult from chart where IDUser=$idUser order by ID desc limit 10;";
    $result = $db->query($query);

if ($result === false) {
              echo '
              <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Wystąpił problem z pobraniem wyników</strong><br>Być może nie ma jeszcze żadnych danych do wyświetlenia.
              </div>
              ';
        } else {

    
$arr = array();
    
foreach ($result as $tmp){
       $arr[] = array($tmp['date'], floatval($tmp['bmiResult']));
    } 
    
$userHistory = array ();
   
$userHistory[] = $arr;
     
echo json_encode($userHistory);
 
}
?>