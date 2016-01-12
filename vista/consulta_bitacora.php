<?php
require ("session.php");
?>
<!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Consulta</title>
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
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

							<!-- Post -->
								<article class="box post post-excerpt">
									<header>
										<!--
											Note: Titles and subtitles will wrap automatically when necessary, so don't worry
											if they get too long. You can also remove the <p> entirely if you don't
											need a subtitle.
										-->
										<h2><a href="#">Consulta</a></h2>
										<hr>
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
										<!-- TITULO EN LA PESTAÑA-->
										<span class="date"><span class="month">Bitácora</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
										<!--
											Note: You can change the number of list items in "stats" to whatever you want.
										-->
										<ul class="stats">

										</ul>
									</div>
                  <!--<form action="buscar.php" method="POST"><p>INGRESE EL NÚMERO DEL CASO QUE DESEA BUSCAR</p> <input name="gar_numcas" type="text" required>
  <input name="Buscar" type="submit" value="Buscar">-->

  		<!--<form action="buscar_info.php" method="POST"><p>INGRESE EL CORREO QUE DESEA BUSCAR</p>
				<table width="500" border="1">
  <tr>
	<td width="176">&nbsp;</td>
	<td width="810" align="center" scope="col"><div align="right"><input name="in_correo" type="text" placeholder="correo@dominio.com" required ></div></td>
	<td width="386" align="left" scope="col"><input name="Buscar" type="submit" value="Buscar"></td>
  </tr>
</table>-->
                  <?php require("../controlador/listar_bitacora.php");?>

								</article>

						</div>
					</div>

					<?php
require ("menu.php");
?>


					</div>

			</div>

	</body>
</html>