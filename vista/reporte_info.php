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
?><!DOCTYPE HTML>

<html>
	<head>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<title>INFO@</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script type="text/javascript" src="../fusioncharts/js/fusioncharts.js"></script>
        <script type="text/javascript" src="../fusioncharts/js/themes/fusioncharts.theme.carbon.js"></script>
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

										<h2><a href="#">Reporte de INFO@</a></h2>
										<hr>
										<div align="right"><a href="../controlador/bdexcel_info.php">Exportar Data</a></div>

									</header>
									<div class="info">

										<span class="date"><span class="month">Info</span>
										<ul class="stats">

										</ul>
									</div>


</span></div></article>
 <div>

   <form action='reporte_info.php'method='get' id="filtro">
 <select name="estatus" id="estatus" onChange="Mostrar(this.form)" >
<option value="">Seleccione</option>
<option value="<?php echo date('Y-m-d');?>" >hoy</option>
<option name="check" >personalizado</option>
 </select>
 <input type='date' name="desde" id="desde" style="visibility:hidden" required>
 <input type='date' max="<?php echo date('Y-m-d'); ?>" name="hasta" id="hasta" style="visibility:hidden"required></input>
  <input type="submit" name="enviar" id="enviar" value="enviar" style="visibility:hidden">
</form>
</div>


                                                    <div>   <?php require ("../controlador/con_grafico.php");?>
                                                         <?php //echo "En estos momentos existen: ".$resultado." casos registrados en sistema";?></div>
<div id="chartContainer1"><script type="text/javascript"> FusionCharts.ready(function(){
	var revenueChart = new FusionCharts({
        "type": "column3d",
        "renderAt": "chartContainer1",

        "width": "700",
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
            <?php info($desde,$hasta);?>
           ]
        }
    });

    revenueChart.render();
})</script></div>

<div id="chartContainer"><script type="text/javascript"> FusionCharts.ready(function(){
	var inChart = new FusionCharts({
        "type": "pie3d",
        "renderAt": "chartContainer",

        "width": "700",
        "height": "400",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Tipo de Requerimiento en el <?php if ($desde==""){ echo "Último mes";}else{ echo "Periodo ($desde / $hasta)";} ?>",
              "subCaption": " ",
              "xAxisName": "Gestor",
              "yAxisName": "Cantidad de Registros",
              "theme": "ocean"
           },
          "data": [
            <?php inf_n($desde,$hasta);?>
           ]
        }
    });

    inChart.render();
})</script></div>

<div id="consolidado"><script type="text/javascript"> FusionCharts.ready(function(){
	var inChart = new FusionCharts({
        "type": "mscolumn3d",
        "renderAt": "consolidado",

        "width": "900",
        "height": "550",
        "dataFormat": "json",
        "dataSource": {
    "chart": {
        "palette": "3",
        "caption": "Consolidado 2015",
        "yaxisname": "Cantidad",
        "showvalues": "0",
        "numvdivlines": "10",
        "divlinealpha": "30",
        "drawanchors": "0",
        "labelpadding": "10",
        "yaxisvaluespadding": "10",
        "useroundedges": "1",
        "legendborderalpha": "0",
        "showborder": "0",
        "theme": "ocean"
    },
    "categories": [
        {
            "category": [
                {
                    "label": "Ene"
                },
                {
                    "label": "Feb"
                },
                {
                    "label": "Mar"
                },
                {
                    "label": "Abr"
                },
                {
                    "label": "May"
                },
                {
                    "label": "Jun "
                },
                {
                    "label": "Jul"
                },

                {
                    "label": "Ago"
                },
                   {
                    "label": "Sep"
                },
                   {
                    "label": "Oct"
                },
                   {
                    "label": "Nov"
                },
                   {
                    "label": "Dic"
                }

            ]
        }
    ],
    "dataset": [
        {
            "seriesname": "Mmorei01",
            "data": [
              <?php for ($i=1; $i <=12; $i++) {
                consolidado('Mmorei01',$i);
              } ?>
            ]
        },

         {
            "seriesname": "Jreyes05",

            "data": [
                  <?php for ($i=1; $i <=12; $i++) {
                consolidado('Jreyes05',$i);
              } ?>
            ]
        },
         {
            "seriesname": "Cgarci01",

            "data": [
               <?php for ($i=1; $i <=12; $i++) {
                consolidado('Cgarci01',$i);
              } ?>
            ]
        },
         {
            "seriesname": "Ctineo01",

            "data": [
              <?php for ($i=1; $i <=12; $i++) {
                consolidado('Ctineo01',$i);
              } ?>
            ]
        },
         {
            "seriesname": "Jgonza21",

            "data": [
               <?php for ($i=1; $i <=12; $i++) {
                consolidado('Jgonza21',$i);
              } ?>
            ]
        },
         {
            "seriesname": "Hherna08",

            "data": [
               <?php for ($i=1; $i <=12; $i++) {
                consolidado('Hherna08',$i);
              } ?>
            ]
        },
         {
            "seriesname": "Ypinov01",

            "data": [
             <?php for ($i=1; $i <=12; $i++) {
                consolidado('Ypinov01',$i);
              } ?>
            ]
        },
        {
            "seriesname": "Jnunez01",

            "data": [
             <?php for ($i=1; $i <=12; $i++) {
                consolidado('Jnunez01',$i);
              } ?>
            ]
        }
    ]
}
    });

    inChart.render();
})</script></div>

<div>
<p>

</p>
  <p> Nota: <i>La falta de datos en algunos meses, por parte de los gestores, se debe al cambio de máquinas que
   se realizó en el departamento, lo cual produjo la pérdida de la Información.</i></p>
</div>

						</div>
					</div>


				<?php
require ("menu.php");
?>

	</body>
</html>