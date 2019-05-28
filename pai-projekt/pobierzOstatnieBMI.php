<?php                
    try {
        $db = new PDO("sqlite:database.sqlite");
    } catch (PDOException $e) {
        echo "Error!".$e->getMessage();
    }
    
    if(isset($_SESSION["id"])){
        $idUser = $_SESSION["id"];
                    
        $query = "select date, bmiResult from chart where IDUser=$idUser order by ID desc limit 1;";
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
            $arr[] =floatval($tmp['bmiResult']);
        }
        if ($arr[0] <= 18.5) {
            include './tips/niedowagaTips.php';
        } else if ($arr[0]>18.5 && $arr[0]<=26) {
            include './tips/prawidlowaTips.php';
        } else if ($arr[0]>26 && $arr[0]<30) {
            include './tips/nadwagaTips.php';
        } else if ($arr[0]>=30 && $arr[0]<35) {
            include './tips/otylosc1Tips.php';
        } else if ($arr[0]>=35 && $arr[0]<40) {
            include './tips/otylosc2Tips.php';
        } else if ($arr[0]>=40) {
            include './tips/otyloscOlbTips.php';
        }else{
            include './tips/brakOstatnieBMI.php';
        }
    }
    }else {
        include './tips/brakOstatnieBMI.php';
    }

?>