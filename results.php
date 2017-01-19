<!DOCTYPE HTML>
<!--
	Introspect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
include 'assets/skripte/functions.php';
session_start();
$user_id = $_SESSION['user_id'];
$exercise_id = $_GET['exercise_id'];
if(isset($_POST['add_result']))
{
	$result=$_POST['result_today'];
	$sql="INSERT INTO `results`(`id_exercise`, `id_user`, `date`, `result`, `time`) VALUES ('".$exercise_id."','".$user_id."','".date("Y-m-d",time())."','".$result."','00:00:01')";
	connectToDb($sql);
}
$sql = "SELECT results.date, results.result FROM results where results.id_user =" . $user_id . " and results.id_exercise =" . $exercise_id;
$result_results = connectToDb($sql);
$sql = "SELECT exercises.name from exercises where exercises.id_exercise = " . $exercise_id;
$result_exercise = connectToDb($sql);
?>
<style>
#chartdiv {
	width	: 100%;
	height	: 500px;
}

</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- Chart code -->
<script>
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "marginRight": 40,
    "marginLeft": 40,
    "autoMarginOffset": 20,
    "mouseWheelZoomEnabled":true,
    "dataDateFormat": "YYYY-MM-DD",
    "valueAxes": [{
        "id": "v1",
        "axisAlpha": 0,
        "position": "left",
        "ignoreAxisWidth":true
    }],
    "balloon": {
        "borderThickness": 1,
        "shadowAlpha": 0
    },
    "graphs": [{
        "id": "g1",
        "balloon":{
          "drop":true,
          "adjustBorderColor":false,
          "color":"#ffffff"
        },
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "bulletSize": 5,
        "hideBulletsCount": 50,
        "lineThickness": 2,
        "title": "red line",
        "useLineColorForBulletBorder": true,
        "valueField": "value",
        "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
    }],
    "chartScrollbar": {
        "graph": "g1",
        "oppositeAxis":false,
        "offset":30,
        "scrollbarHeight": 80,
        "backgroundAlpha": 0,
        "selectedBackgroundAlpha": 0.1,
        "selectedBackgroundColor": "#888888",
        "graphFillAlpha": 0,
        "graphLineAlpha": 0.5,
        "selectedGraphFillAlpha": 0,
        "selectedGraphLineAlpha": 1,
        "autoGridCount":true,
        "color":"#AAAAAA"
    },
    "chartCursor": {
        "pan": true,
        "valueLineEnabled": true,
        "valueLineBalloonEnabled": true,
        "cursorAlpha":1,
        "cursorColor":"#258cbb",
        "limitToGraph":"g1",
        "valueLineAlpha":0.2,
        "valueZoomable":true
    },
    "valueScrollbar":{
      "oppositeAxis":false,
      "offset":50,
      "scrollbarHeight":10
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    },
    "dataProvider": [
	<?php 
	$row=mysqli_fetch_array($result_results);
	echo '{"date":"' . $row['date'] . '", "value":' . $row['result'] . '}';
	while($row=mysqli_fetch_array($result_results))
	echo ',{"date":"' . $row['date'] . '", "value":' . $row['result'] . '}'; ?>
	]
});

chart.addListener("rendered", zoomChart);

zoomChart();

function zoomChart() {
    chart.zoomToIndexes(chart.dataProvider.length - 40, chart.dataProvider.length - 1);
}
</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
<html>
	<head>
		<title>sporty</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body>

		<?php 
		require ('assets/skripte/header.php');
		?>
		<!-- Main -->
			<section id="main" >
				<div class="inner">
					<header class="major special">
						<?php while($row=mysqli_fetch_array($result_exercise))
							echo '<h2>' . $row['name'] . '</h2>';
						?>
						<form method="post" action="">
						<h3>DODAJ REZULTAT</h3>
						<p><input type="text" name="result_today" placeholder="Upiši današnji rezultat"></p>
						<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="SPREMI" name="add_result" class="special" /></li>
										</ul>
									</div>
						</form>
						<div id="chartdiv"></div>
						
					</header>
					</div>
			</section>

		<?php 
		require ('assets/skripte/footer.php');
		?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
