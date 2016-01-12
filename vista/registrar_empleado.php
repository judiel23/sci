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
		<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
		<title>Gestores</title>
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
										<h2><a href="#">Registro De Gestores</a></h2>
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
										<span class="date"><span class="month">Gestores</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
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
									<form id="form1" name="form1" method="post" action="../controlador/con_registrarempleado.php">
  <div align="center">
    <h2>Llene el formulario para registrar sus datos en el sistema</h2>
    <p>&nbsp;</p>
    <table width="500" border="1">
  <tr>
    <th width="41" scope="col">&nbsp;</th>
    <td width="298" scope="col"><div align="right"><strong>Nombre:</strong></div></td>
    <td width="466" scope="col"><input type="text" name="nombre" id="nombre" placeholder="Nombre"/></td>
    <th width="385" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Apellido:</strong></div></td>
    <td><input type="text" name="apellido" id="apellido" placeholder="Apeliido"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Perfil:</strong></div></td>
    <td><select name="perfil" id="perfil" required>
			<option value="">Seleccione</option>
			<option value="1">Supervisor</option>
			<option value="2">Gestor</option>
			<option value="3">Consulta</option>
		 </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>C&eacute;dula:</strong></div></td>
    <td><input type="text" name="cedula" id="cedula" placeholder="12345678"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Login:</strong></div></td>
    <td><input type="text" name="login" id="login" placeholder="Usuario De Red"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Clave:</strong></div></td>
    <td><input type="password" name="clave" id="clave" placeholder="*******"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="right"><strong>Confirme Su Clave: </strong></div></td>
    <td><input type="password" name="conficlave" id="conficlave" placeholder="*******"/></td>
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

	</body>
</html>