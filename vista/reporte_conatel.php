<?php
require ("session.php");

//::::::::::::::::::::::
if(!isset($_GET['desde'])&&!isset($_GET['hasta'])){
  $desde="";
  $hasta="";
}else{
  $desde=$_GET['desde'];
  $hasta=$_GET['hasta'];
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

       <script type="text/javascript">


<!--

function Mostrar(cual) {
 var opcion = cual.estatus.options[cual.estatus.selectedIndex].text;

if (opcion == 'personalizado'){
  cual.desde.style.visibility='visible';
  cual.hasta.style.visibility='visible';
    cual.enviar.style.visibility='visible';

}
if (opcion == 'hoy'||opcion == 'Seleccione' ){
  cual.desde.style.visibility='hidden';
  cual.hasta.style.visibility='hidden';
  cual.enviar.style.visibility='hidden';
}
}
//-->
</script>
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

<form action='reporte_conatel.php'method='get' id="filtro">
  <select name="estatus" id="estatus" onChange="Mostrar(this.form)" >
    <option value="">Seleccione</option>
    <option value="<?php // echo date('Y-m-d');?>" >hoy</option>
    <option name="check" >personalizado</option>
  </select>
  <input type='date' min="2016-01-01" name="desde" id="desde" style="visibility:hidden" required>
  </input>
  <input type='date' max="<?php echo date('Y-m-d'); ?>"name="hasta" id="hasta" style="visibility:hidden"required>
  </input>
  <input type="submit" name="enviar" id="enviar" value="enviar" style="visibility:hidden">
  </input>
</form>

</div>

      <div>
        <?php require ("../controlador/con_grafico.php");?>
        <?php //echo "En estos momentos existen: ".$resultado." casos registrados en sistema";?>
      </div>
<div id="chartContainer1"><script type="text/javascript"> FusionCharts.ready(function(){
	var revenueChart = new FusionCharts({
        "type": "column3d",
        "renderAt": "chartContainer1",

        "width": "800",
        "height": "350",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Casos Registrados en el <?php if ($desde==""){ echo "Último mes";}else{ echo "Periodo ($desde / $hasta)";} ?>",
              "subCaption": " ",
              "xAxisName": "Gestor",
              "yAxisName": "Cantidad de Registros",
              "theme": "ocean"
           },
          "data": [
            <?php con($desde,$hasta);?>
           ]
        }
    });

    revenueChart.render();
})</script></div>

<div id="chartContainer"><script type="text/javascript"> FusionCharts.ready(function(){
	var inChart = new FusionCharts({
        "type": "pie3d",
        "renderAt": "chartContainer",

        "width": "800",
        "height": "450",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Tipo de Requerimiento en el <?php if ($desde==""){ echo "Último mes";}else{ echo "Periodo ($desde / $hasta)";} ?>",
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
<div id="chartContainer2"><script type="text/javascript"> FusionCharts.ready(function(){
	var inChart = new FusionCharts({
        "type": "pie3d",
        "renderAt": "chartContainer2",

        "width": "800",
        "height": "250",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Estatus de Requerimiento en el <?php if ($desde==""){ echo "Último mes";}else{ echo "Periodo ($desde / $hasta)";} ?>",
              "subCaption": " ",
              "xAxisName": "Gestor",
              "valueFontSize":"18",
              "yAxisName": "Cantidad de Registros",
              "theme": "ocean"
           },
          "data": [
            <?php con_estatus($desde,$hasta);?>
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
  <script type="text/javascript">
  $( document ).ready(function() {

});</script>
</html>