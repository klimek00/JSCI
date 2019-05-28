<div class="chart-container" style="position: relative; height:10px; width:10px; margin-top: 10px">
    <canvas id="historyChart"></canvas>
</div>
<?php
  $userid = $_SESSION["id"];
  try {
    $db = new PDO("sqlite:database.sqlite");
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
  $sql = "SELECT date, bmiResult FROM chart WHERE IDUser = $userid ORDER BY ID DESC LIMIT 10";
  $result = $db->query($sql);
  if ($result === false) {
    echo '
    <div class="container alert alert-danger alert-dismissible fade show" style="margin-top: 20px">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Wystąpił problem z pobraniem wyników</strong><br>Być może nie ma jeszcze żadnych danych do wyświetlenia.
    </div>
    ';
  } else {
    $history = array();
      foreach ($result as $value) {
        $history[] = array('date' => $value["date"],'bmi' => floatval($value["bmiResult"]));
      }
    $history_json = json_encode($history);
  }
?>
<script type="text/javascript">
function draw() {
  let history = JSON.parse('<?= $history_json; ?>');
  let date = new Array();
  let bmi = new Array();
  for (let i = 0; i < history.length; i++) {
    date.push(history[i].date);
    bmi.push(history[i].bmi);
  }
  let ctx = document.getElementById('historyChart').getContext('2d');
  ctx.canvas.parentNode.style.height = '600px';
  ctx.canvas.parentNode.style.width = '1100px';
  let chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: date,
        datasets: [{
            data: bmi,
            label: 'BMI',
            fill: false,
            backgroundColor: 'rgb(48, 178, 156)',
            borderColor: 'rgb(48, 178, 156)'
        }]
    },
    options: {
      legend: {
        display: true
    },
    }
  });
}
</script>
