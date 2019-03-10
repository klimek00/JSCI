<?php
    session_start();
         
        
try {
        $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
        echo "Error!".$e->getMessage();
    }

    $idUser = $_SESSION["id"];
            
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
    
    //nie działa, problem z wpisaniem do tablicy $userHistory wpisów z bazy
    
    foreach ($result as $tmp){
            $arr = array ($tmp['date'], $tmp['bmiResult']);
       
    }
    
foreach ($result as $tmp){
        $a[] = array ($tmp['date'], $tmp['bmiResult']);
    }
    
$a = array(
    array('2017-01-01 05:03:22',23),
    array('2017-01-05',21),
    array('2017-02-04',25),
    array('2017-01-03',22),
    array('2017-01-07',26)
)
        
     
$userHistory = array ( 
        $a;
);
    
     
echo json_encode($userHistory);
 
}
?>