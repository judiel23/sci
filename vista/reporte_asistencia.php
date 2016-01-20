<?php
require ("session.php");
//::::::::::::::::::::::
if(!isset($_GET['mes'])&&!isset($_GET['ano'])&&!isset($_GET['ano'])&&!isset($_GET['ano'])){
	$desde="";
	$hasta="";
	$mes="";
	$ano="";
}else{
	$mes=$_GET['mes'];
	$ano=$_GET['ano'];

if ($mes =="Ene") {  $desde="$ano-01-01"; $hasta="$ano-01-31"; }
if ($mes =="Feb") {  $desde="$ano-02-01"; $hasta="$ano-02-31"; }
if ($mes =="Mar") {  $desde="$ano-03-01"; $hasta="$ano-03-31"; }
if ($mes =="Abr") {  $desde="$ano-04-01"; $hasta="$ano-04-31"; }
if ($mes =="May") {  $desde="$ano-05-01"; $hasta="$ano-05-31"; }
if ($mes =="Jun") {  $desde="$ano-06-01"; $hasta="$ano-06-31"; }
if ($mes =="Jul") {  $desde="$ano-07-01"; $hasta="$ano-07-31"; }
if ($mes =="Ago") {  $desde="$ano-08-01"; $hasta="$ano-08-31"; }
if ($mes =="Sep") {  $desde="$ano-09-01"; $hasta="$ano-09-31"; }
if ($mes =="Oct") {  $desde="$ano-10-01"; $hasta="$ano-10-31"; }
if ($mes =="Nov") {  $desde="$ano-11-01"; $hasta="$ano-11-31"; }
if ($mes =="Dic") {  $desde="$ano-12-01"; $hasta="$ano-12-31"; }

}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<title>Asistencia</title>
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

										<h2><a href="#">Reporte de Asistencia</a></h2>
										<hr>
										<!-- <div align="right"><a href="../controlador/bdexcel_bitacora.php">Exportar Data</a></div>-->

									</header>
									<div class="info">

										<span class="date"><span class="month">Asistencia</span>
										<ul class="stats">

										</ul>
									</div>


</span></div></article>

 <div>

  <form action='reporte_asistencia.php'method='get'>
 <select name="mes" id="mes">
<option value="">Seleccione</option>
<option value="Ene" >Enero</option>
<option value="Feb" >Febrero</option>
<option value="Mar" >Marzo</option>
<option value="Abr" >Abril</option>
<option value="May" >Mayo</option>
<option value="Jun" >Junio</option>
<option value="Jul" >Julio</option>
<option value="Ago" >Agosto</option>
<option value="Sep" >Septiembre</option>
<option value="Oct" >Octubre</option>
<option value="Nov" >Noviembre</option>
<option value="Dic" >Diciembre</option>
 </select>
 <select name="ano" id="ano">
        <?php
        for($i=date('o'); $i>=2015; $i--){
            if ($i == date('o'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select>

  <input type="submit" name="enviar" id="enviar" value="enviar">
</form>
</div>

                                                    <div>    <?php require ("../controlador/con_grafico.php");

                                                         //php echo "En estos momentos existen: ".$resultado." casos registrados en sistema";?></div>
<div id="chartContainer1"><script type="text/javascript"> FusionCharts.ready(function(){
      var revenueChart = new FusionCharts({
        "type": "stackedcolumn3d",
        "renderAt": "chartContainer1",

        "width": "850",
        "height": "500",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Asistencia <?php echo "$mes $ano";?>",
              "showvalues": "1",
     	      "plotfillalpha": "95",
        	  "formatnumberscale": "0",
              "showborder": "0",
              "subCaption": " ",
              "xAxisName": "",
              "yAxisName": "Cantidad de días",
              "theme": "ocean"

           		},
          "categories": [
             {
                	"category":[
                		<?php asistencia($desde, $hasta);?>
           				]
        	}
        	],
        	"dataset": [
             {
                	"seriesname": "A",
                	"color": "C4D79B",
                	"data": 	[
                		<?php valores('Ccarus', 'A', $desde, $hasta);?>
                		<?php valores('jgonza21', 'A', $desde, $hasta);?>
                		<?php valores('jnunez01', 'A', $desde, $hasta);?>
                		<?php valores('mmorei01', 'A', $desde, $hasta);?>
                		<?php valores('cgarci01', 'A', $desde, $hasta);?>
                		<?php valores('ctineo01', 'A', $desde, $hasta);?>
                		<?php valores('jreyes05', 'A', $desde, $hasta);?>
                		<?php valores('ypinov01', 'A', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "R",
                	"color": "7030A0",
                	"data": 	[
                		<?php valores('Ccarus', 'R', $desde, $hasta);?>
                		<?php valores('jgonza21', 'R', $desde, $hasta);?>
                		<?php valores('jnunez01', 'R', $desde, $hasta);?>
                		<?php valores('mmorei01', 'R', $desde, $hasta);?>
                		<?php valores('cgarci01', 'R', $desde, $hasta);?>
                		<?php valores('ctineo01', 'R', $desde, $hasta);?>
                		<?php valores('jreyes05', 'R', $desde, $hasta);?>
                		<?php valores('ypinov01', 'R', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "P",
                	"color": "538DD5",
                	"data": 	[
                		<?php valores('Ccarus', 'P', $desde, $hasta);?>
                		<?php valores('jgonza21', 'P', $desde, $hasta);?>
                		<?php valores('jnunez01', 'P', $desde, $hasta);?>
                		<?php valores('mmorei01', 'P', $desde, $hasta);?>
                		<?php valores('cgarci01', 'P', $desde, $hasta);?>
                		<?php valores('ctineo01', 'P', $desde, $hasta);?>
                		<?php valores('jreyes05', 'P', $desde, $hasta);?>
                		<?php valores('ypinov01', 'P', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "V",
                	"color": "E26B0A",
                	"data": 	[
                		<?php valores('Ccarus', 'V', $desde, $hasta);?>
                		<?php valores('jgonza21', 'V', $desde, $hasta);?>
                		<?php valores('jnunez01', 'V', $desde, $hasta);?>
                		<?php valores('mmorei01', 'V', $desde, $hasta);?>
                		<?php valores('cgarci01', 'V', $desde, $hasta);?>
                		<?php valores('ctineo01', 'V', $desde, $hasta);?>
                		<?php valores('jreyes05', 'V', $desde, $hasta);?>
                		<?php valores('ypinov01', 'V', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "L",
                	"color": "808080",
                	"data": 	[
                		<?php valores('Ccarus', 'L', $desde, $hasta);?>
                		<?php valores('jgonza21', 'L', $desde, $hasta);?>
                		<?php valores('jnunez01', 'L', $desde, $hasta);?>
                		<?php valores('mmorei01', 'L', $desde, $hasta);?>
                		<?php valores('cgarci01', 'L', $desde, $hasta);?>
                		<?php valores('ctineo01', 'L', $desde, $hasta);?>
                		<?php valores('jreyes05', 'L', $desde, $hasta);?>
                		<?php valores('ypinov01', 'L', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "II",
                	"color": "FFFF00",
                	"data": 	[
                		<?php valores('Ccarus', 'II', $desde, $hasta);?>
                		<?php valores('jgonza21', 'II', $desde, $hasta);?>
                		<?php valores('jnunez01', 'II', $desde, $hasta);?>
                		<?php valores('mmorei01', 'II', $desde, $hasta);?>
                		<?php valores('cgarci01', 'II', $desde, $hasta);?>
                		<?php valores('ctineo01', 'II', $desde, $hasta);?>
                		<?php valores('jreyes05', 'II', $desde, $hasta);?>
                		<?php valores('ypinov01', 'II', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "IJ",
                	"color": "632523",
                	"data": 	[
                		<?php valores('Ccarus', 'IJ', $desde, $hasta);?>
                		<?php valores('jgonza21', 'IJ', $desde, $hasta);?>
                		<?php valores('jnunez01', 'IJ', $desde, $hasta);?>
                		<?php valores('mmorei01', 'IJ', $desde, $hasta);?>
                		<?php valores('cgarci01', 'IJ', $desde, $hasta);?>
                		<?php valores('ctineo01', 'IJ', $desde, $hasta);?>
                		<?php valores('jreyes05', 'IJ', $desde, $hasta);?>
                		<?php valores('ypinov01', 'IJ', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "AF",
                	"color": "FFC000",
                	"data": 	[
                		<?php valores('Ccarus', 'AF', $desde, $hasta);?>
                		<?php valores('jgonza21', 'AF', $desde, $hasta);?>
                		<?php valores('jnunez01', 'AF', $desde, $hasta);?>
                		<?php valores('mmorei01', 'AF', $desde, $hasta);?>
                		<?php valores('cgarci01', 'AF', $desde, $hasta);?>
                		<?php valores('ctineo01', 'AF', $desde, $hasta);?>
                		<?php valores('jreyes05', 'AF', $desde, $hasta);?>
                		<?php valores('ypinov01', 'AF', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "LF",
                	"color": "00B0F0",
                	"data": 	[
                		<?php valores('Ccarus', 'LF', $desde, $hasta);?>
                		<?php valores('jgonza21', 'LF', $desde, $hasta);?>
                		<?php valores('jnunez01', 'LF', $desde, $hasta);?>
                		<?php valores('mmorei01', 'LF', $desde, $hasta);?>
                		<?php valores('cgarci01', 'LF', $desde, $hasta);?>
                		<?php valores('ctineo01', 'LF', $desde, $hasta);?>
                		<?php valores('jreyes05', 'LF', $desde, $hasta);?>
                		<?php valores('ypinov01', 'LF', $desde, $hasta);?>
           				]
        	},
        	{
                	"seriesname": "RT",
                	"color": "00B050",
                	"data": 	[
                		<?php valores('Ccarus', 'RT', $desde, $hasta);?>
                		<?php valores('jgonza21', 'RT', $desde, $hasta);?>
                		<?php valores('jnunez01', 'RT', $desde, $hasta);?>
                		<?php valores('mmorei01', 'RT', $desde, $hasta);?>
                		<?php valores('cgarci01', 'RT', $desde, $hasta);?>
                		<?php valores('ctineo01', 'RT', $desde, $hasta);?>
                		<?php valores('jreyes05', 'RT', $desde, $hasta);?>
                		<?php valores('ypinov01', 'RT', $desde, $hasta);?>
           				]
        	},
        	],
    }});

    revenueChart.render();
})</script></div>

<div>

  <p style="font-size:12px"> Nota: <i> A: Asistente / R: Reposo / P: Permiso / V: Vacaciones / L: Libre / II: Inasistencia injustificada / IJ: Inasistencia Justificada / AF: Asistente Feriado / LF: Libre feriado / RT: Retraso </i></p>
</div>

						</div>
					</div>


				<?php
require ("menu.php");
?>

	</body>
</html>