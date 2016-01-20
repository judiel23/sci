<?php
require ("session.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Registro Twitter</title>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script type="text/javascript" src="../fusioncharts/js/fusioncharts.js"></script>
		<script type="text/javascript" src="../fusioncharts/js/themes/fusioncharts.theme.carbon.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
	<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->

	</head>
	<!--
		Note: Set the body element's class to "left-sidebar" to position the sidebar on the left.
		Set it to "right-sidebar" to, you guessed it, position it on the right.
	-->
	<body class="left-sidebar">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Content -->
					<div id="content">
						<div class="inner">

							<!-- Post -->
								<article class="box post post-excerpt">
									<header>
									  <h2>Reporte Casos Twitter</h2>
									  <hr>
									</header>
									<div class="info">

										<span class="date"><span class="month">Twitter<span>y</span></span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
										<!--
											Note: You can change the number of list items in "stats" to whatever you want.
										-->
										<ul class="stats">

										</ul>
									</div>
									<div align="center">
<br>

 <?php require ("../controlador/con_grafico.php");?>
<div id="twitter" ></a>><script type="text/javascript"> FusionCharts.ready(function(){
	var revenueChart = new FusionCharts({
        "type": "column3d",
        "renderAt": "twitter",

        "width": "920",
        "height": "500",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Consolidado mensual de casos para el año 2015",
              "subCaption": " ",
              "xAxisName": "Mes",
              "yAxisName": "Cantidad de Registros",
              "theme": "ocean"
           },
          "data": [
            <?php twitter_mes();?>
           ]
        }
    });

    revenueChart.render();
})</script>
</div>


								</article>


					         </div>
<?php
require ("menu.php");
?>

                        </div>
			</div>

	</body>
</html>