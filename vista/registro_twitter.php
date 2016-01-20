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
									  <h2>Registro de Casos Twitter</h2>
									  <hr>
										<!--
											Note: Titles and subtitles will wrap automatically when necessary, so don't worry
											if they get too long. You can also remove the <p> entirely if you don't
											need a subtitle.
										-->
										<h2><!--<a href="#">Info@</a></h2>-->
										<!--<p>A free, fully responsive HTML5 site template by HTML5 UP</p>-->
									</header>
									<div class="info">
										<!--
											Note: The date should be formatted exactly as it's shown below. In particular, the
											"least significant" characters of the month should be encapsulated in a <span>
											element to denote what gets dropped in 1200px mode (eg. the "uary" in "January").
											Oh, and if you don't need a date for a particular page or post you can simply delete
											the entire "date" element.

										-->
										<span class="date"><span class="month">Twitter<span>y</span></span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
										<!--
											Note: You can change the number of list items in "stats" to whatever you want.
										-->
										<ul class="stats">
											<!--<li><a href="#" class="icon fa-comment">16</a></li>
											<li><a href="#" class="icon fa-heart">32</a></li>
											<li><a href="#" class="icon fa-twitter">64</a></li>
											<li><a href="#" class="icon fa-facebook">128</a></li>-->
										</ul>
									</div>
									<div align="center">
									<form id="form1" name="form1" method="post" action="../controlador/con_registrar_twitter.php">
<h2>Llene el formulario para registrar sus datos en el sistema</h2>
<br>
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
    <td colspan="4" align="center">
    	<br>
    	<input type="submit" name="enviar" id="enviar" value="Enviar" />
   </td>
    </tr>

</table>
<<<<<<< HEAD
=======

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
})</script>
</div>
>>>>>>> origin/master

</form>

<<<<<<< HEAD
 
</div>


=======
>>>>>>> origin/master
								</article>


					         </div>
<?php
require ("menu.php");
?>

                        </div>
			</div>

	</body>
</html>