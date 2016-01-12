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
										<hr>



									</header>
									<div class="info">


										<!-- TITULO EN LA PESTAÑA-->
										<span class="date"><span class="month">Gestores</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->

										<ul class="stats">

										</ul>
									</div>
									<form id="form1" name="form1" method="post" action="../controlador/con_registrar_twitter.php">
  <div align="center">
    <h2>Complete los campos por gestor</h2>
    <p>&nbsp;</p>
    <table width="500" border="1">


  	 <tr>
  	<th width="41" scope="col">&nbsp;</th>
    <td width="298" scope="col"><div align="right"><strong>Gestor:</strong></div></td>
    <td width="466" scope="col"><select name="gestor" id="gestor" required>
			<option value="">Seleccione</option>
			<option value="Carlos Garcia">Carlos Garcia</option>
			<option value="Carlos Tineo">Carlos Tineo</option>
			<option value="Judiel Reyes">Judiel Reyes</option>
			<option value="Miguel Moreira">Miguel Moreira</option>
			<option value="Jesus Goonzalez">Jesus Goonzalez</option>
			<option value="Hilda Hernandez">Hilda Hernandez</option>
			<option value="Junior Nunez">Junior Nunez</option>
			<option value="Yadira Pino">Yadira Pino</option>

		 </select></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Mes:</strong></div></td>
    <td><select name="mes" id="mes" required>
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
		 </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Cantidad:</strong></div></td>
    <td><input type="numeric" name="cantidad" id="cantidad" required/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="hidden" name="ano" id="ano" value="2015" /></td>
    <td>&nbsp;</td>
  </tr>

  <tr>
 <tr>
  <td colspan="4" align="center">&nbsp;</td>
 </tr>
    <td colspan="4" align="center"><input type="submit" name="enviar" id="enviar" value="Enviar" />
      <!--<input type="reset" name="borrar" id="borrar" value="Borrar" /></td>-->	</td>
    </tr>
</table>
    <p>&nbsp;</p>
    </div>
</form></p>



								</article>



						</div>
					</div>

				<!-- Sidebar -->
				<?php
require ("menu.php");
?>

										<span class="date"><span class="month">Twitter</span> <!--<span class="day">14</span><span class="year">2014</span></span>-->
										<!--
											Note: You can change the number of list items in "stats" to whatever you want.
										-->

									<div></div>
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