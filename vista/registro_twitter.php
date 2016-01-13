<?php
require ("session.php");
?>
<html>
	<head>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<title>Twitter</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script type="text/javascript" src="../fusioncharts/js/fusioncharts.js"></script>
        <script type="text/javascript" src="../fusioncharts/js/themes/fusioncharts.theme.carbon.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
<body class="left-sidebar">

		<!-- Wrapper -->
	<div id="wrapper">

		<!-- Content -->
	<div id="content">
	<div class="inner">

		<!-- Post -->
	<article class="box post post-excerpt">
	<header>
	<h2><a href="#">Registro De Casos</a></h2>
	</header>
	<div class="info">

		<!-- TITULO EN LA PESTAÑA-->
	<span class="date"><span class="month">Gestores</span>

	</div>

  	<div align="center" >
    <h2>Complete los campos por gestor</h2>
	<br>
	<form id="form1" name="form1" method="post" action="../controlador/con_registrar_twitter.php">
    <table width="500" border="1">
  	<tr>
    <td >
    	<div align="right"><strong>Gestor:</strong></div>
    </td>
    <td >
    	<select name="gestor" id="gestor"  style="width:50%;height:30px" required>
			<option value="">Seleccione</option>
			<option value="Carlos Garcia">Carlos Garcia</option>
			<option value="Carlos Tineo">Carlos Tineo</option>
			<option value="Judiel Reyes">Judiel Reyes</option>
			<option value="Miguel Moreira">Miguel Moreira</option>
			<option value="Jesus Goonzalez">Jesus Goonzalez</option>
			<option value="Hilda Hernandez">Hilda Hernandez</option>
			<option value="Junior Nunez">Junior Nunez</option>
			<option value="Yadira Pino">Yadira Pino</option>

		</select>
	</td>
  	</tr>

  <tr>
    <td>
    	<div align="right"><strong>Mes:</strong></div>
    </td>
    <td><select name="mes" id="mes" style="width:50%;height:30px" required>
			<option value="">Seleccione</option>
			<option value="Enero">Enero</option>
			<option value="Febrero">Febrero</option>
			<option value="Marzo">Marzo</option>
			<option value="Abril">Abril</option>
			<option value="Mayo">Mayo</option>
			<option value="Junio">Junio</option>
			<option value="Julio">Julio</option>
			<option value="Agosto">Agosto</option>
			<option value="Septiembre">Septiembre</option>
			<option value="Octubre">Octubre</option>
			<option value="Noviembre">Noviembre</option>
			<option value="Diciembre">Diciembre</option>
		 </select>
	</td>
  </tr>

  <tr>
    <td><div align="right"><strong>Cantidad:</strong></div></td>
    <td><input type="numeric" name="cantidad" id="cantidad" style="width:50%;height:30px" required/></td>

  </tr>

  <tr>
    <td><input type="hidden" name="ano" id="ano" value="2015" /></td>
  </tr>

  <tr>
    <td colspan="4" align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" />
      <!--<input type="reset" name="borrar" id="borrar" value="Borrar" /></td>-->	</td>
    </tr>

</table>

</form>
 <?php require ("../controlador/con_grafico.php");?>
<div id="twitter" ></a>><script type="text/javascript"> FusionCharts.ready(function(){
	var revenueChart = new FusionCharts({
        "type": "column3d",
        "renderAt": "twitter",

        "width": "700",
        "height": "350",
        "dataFormat": "json",
        "dataSource": {
          "chart": {
              "caption": "Casos Registrados por mes",
              "subCaption": " ",
              "xAxisName": "Mes",
              "yAxisName": "Cantidad de Registros",
              "theme": "carbon"
           },
          "data": [
            <?php twitter_mes();?>
           ]
        }
    });

    revenueChart.render();
})</script></div>
</div>
</div>

<!-- Sidebar -->
<?php
require ("menu.php");
?>

<span class="date"><span class="month">Twitter</span>

</article>

<?php
require ("menu.php");
?>
</body>
</html>