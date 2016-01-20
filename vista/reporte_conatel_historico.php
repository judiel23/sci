<?php
require ("session.php");
if(!isset($_GET['estatus'])){
  $desde="";
  $hasta="";
}else{
  $año=$_GET['estatus'];

if  ($año=="2008"){  $desde="2008-01-01";    $hasta="2008-12-31"; }
if  ($año=="2009"){  $desde="2009-01-01";    $hasta="2009-12-31"; }
if  ($año=="2010"){  $desde="2010-01-01";    $hasta="2010-12-31"; }
if  ($año=="2011"){  $desde="2011-01-01";    $hasta="2011-12-31"; }
if  ($año=="2012"){  $desde="2012-01-01";    $hasta="2012-12-31"; }
if  ($año=="2013"){  $desde="2013-01-01";    $hasta="2013-12-31"; }
if  ($año=="2014"){  $desde="2014-01-01";    $hasta="2014-12-31"; }
if  ($año=="2015"){  $desde="2015-01-01";    $hasta="2015-12-31"; }
if  ($año=="2016"){  $desde="2016-01-01";    $hasta="2016-12-31"; }
//::::::::::::::::::::::
 }
?>
<!DOCTYPE HTML>

<html>
	<head>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<title>CONATEL</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script type="text/javascript" src="../fusioncharts/js/fusioncharts.js"></script>
        <script type="text/javascript" src="../fusioncharts/js/themes/fusioncharts.theme.carbon.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
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


								<article class="box post post-excerpt">
									<header>

										<h2><a href="#">Reporte de CONATEL</a></h2>
										<hr>
                    <div align="right"><a href="../controlador/bdexcel_conatel.php">Exportar Data</a></div>

									</header>
									<div class="info">

										<span class="date"><span class="month">CONATEL</span>
										<ul class="stats">

										</ul>
									</div>


</span></div></article>

<div>

<form action='reporte_conatel_historico.php'method='get'   id="filtro">
  <select name="estatus" id="estatus" onChange="Mostrar(this.form)">
    <?php
        for($i=date('o'); $i>=2008; $i--){
            if ($i == date('o'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>

  </select>
  <!--<input type='date' name="desde" id="desde" style="visibility:hidden" required>
  </input>
  <input type='date' name="hasta" id="hasta" style="visibility:hidden"required>
  </input>-->
  <input type="submit" name="enviar" id="enviar" value="enviar" >
  </input>
</form>
<div>
<p>

</p>
</div>
</div>

      <div>
        <?php require ("../controlador/con_grafico.php");?>
        <?php //echo "En estos momentos existen: ".$resultado." casos registrados en sistema";?>
      </div>


<div id="chartContainer"><script type="text/javascript"> FusionCharts.ready(function(){
  var inChart = new FusionCharts({
        "type": "pie3d",
        "renderAt": "chartContainer",

        "width": "800",
        "height": "690",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Tipo de Requerimiento <?php echo "$año" ?> ",
              "subCaption": " ",
              "xAxisName": "Gestor",
              "valueFontSize":"12",
              "yAxisName": "Cantidad de Registros",
              "theme": "ocean"
           },
          "data": [
            <?php con_asu($desde,$hasta);?>
           ]
        }
    });

    inChart.render();
})</script></div>

						</div>
					</div>


				<?php
require ("menu.php");
?>

	</body>
</html>