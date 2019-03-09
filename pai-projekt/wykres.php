<!DOCTYPE html>
<html>
<head>
    <title>mperry Line Charts</title>
    <link class="include" rel="stylesheet" type="text/css" href="./dist/jquery.jqplot.min.css" />
    <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="../excanvas.js"></script><![endif]-->
    <script class="include" type="text/javascript" src="./dist/jquery.min.js"></script>
    <script class="include" type="text/javascript" src="./dist/jquery.jqplot.min.js"></script>
    <script class="include" type="text/javascript" src="./dist/plugins/jqplot.canvasTextRenderer.min.js"></script>
    <script class="include" type="text/javascript" src="./dist/plugins/jqplot.canvasAxisLabelRenderer.min.js"></script>
    <script type="text/javascript" src="./dist/plugins/jqplot.dateAxisRenderer.min.js"></script>
    <script type="text/javascript" src="./dist/plugins/jqplot.highlighter.min.js"></script>
    <script type="text/javascript" src="./dist/plugins/jqplot.enhancedLegendRenderer.min.js"></script>
    <style>
        .chart { height:400px; width:700px; }
    </style>
</head>

<body>


<div id="chart-carbon" class="chart"></div>

    

<script class="code" type="text/javascript">
    function getXMLHttpRequest(){
//FF,Chrome, Safari, Opere i inne normalne przegladarki
	  try { return new XMLHttpRequest();} catch(err1) {
	  //EXPLORER
		try { return new ActiveXObject('Msxml2.XMLHTTP'); } catch(err2) {
		//inne 
		  try { return new ActiveXObject('Microsoft.XMLHTTP');} catch(err3) { 
			alert("nie wspierasz AJAX");
			return false; }
		}
	  }
	} 
    
var owoce; 
var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      owoce = JSON.parse(this.responseText);
    }
  };
  xhttp.open("GET", "wykres_content.php", true);
  xhttp.send();
    

var plot1, plot2; 
var historyUser = [
    [['2004-08-12',19], ['2004-09-12',20], ['2004-10-12',5.7], ['2004-12-12',3.2]],
    
];
    


$(document).ready(function(){
  options = {
      grid: {
          backgroundColor: "white",
      },
     // series: seriesLabels, 
      axesDefaults: {
          labelRenderer: $.jqplot.CanvasAxisLabelRenderer
      },
      seriesDefaults: { // applies to all rows
          lineWidth: 2,
          style: 'square',
          rendererOptions: { smooth: true }
      },
      highlighter: {
          show: true,
          sizeAdjust: 7.5
      },
     
  };
  carbonPlot = $.jqplot('chart-carbon', historyUser, $.extend(options, {
      title: 'Carbon Sequestration over time',
      axes: {
        xaxis: {
          label: "Czas",
          renderer: $.jqplot.DateAxisRenderer,
          tickOptions: {formatString:'%d.%m.%Y'},
          pad: 0
        },
        yaxis: {
          label: "Wskaźnik BMI",
          
        }
      }
  }));
  
  $('#chart-carbon').change( function(e) {
     var chartId = "#chart-" + $(this).val();
     $('.chart:visible').hide();
     $(chartId).fadeIn();
  });
  $('chart-carbon').change();

});
</script>
</body>
</html>