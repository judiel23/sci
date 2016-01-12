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
		<title>Registro Bitácora</title>
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
										<h2><a href="#">Registro</a></h2>
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
											<!--<li><a href="#" class="icon fa-comment">16</a></li>
											<li><a href="#" class="icon fa-heart">32</a></li>
											<li><a href="#" class="icon fa-twitter">64</a></li>
											<li><a href="#" class="icon fa-facebook">128</a></li>-->
										</ul>
									</div>
									<form action="../controlador/con_registrabitacora.php" method="post">
									<table width="794" border="1">
  <tr>
    <th colspan="2" bgcolor="#eeece1" scope="col"><div align="center"><strong>Bit&aacute;cora</strong></div></th>
  </tr>
  <tr>
    <td width="321" bgcolor="#f7f6f1" ><div align="right"><strong>Gestor:</strong></div></td>
    <th width="457" bgcolor="#f7f6f1" ><div align="left"><input type="text" name="bit_gestor" id="bit_gestor" placeholder="Gestor"  pattern="[A-Za-z 0-9]+" style="width:160px" readonly="readonly" value="<?php echo $_SESSION['emp_login']; ?>" required></div></th>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha  Inicio: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left">
      <input name="bit_fechaini" id="bit_fechaini" type="date" Style="width:160px" required>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Hora Inicio: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left">
      <input name="bit_horini" id="bit_horini" type="time" Style="width:160px" required>
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha Fin: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left">
      <input name="bit_fechafin" id="bit_fechafin" type="date" Style="width:160px">
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Hora Fin: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left">
      <input name="bit_horfin" id="bit_horfin" type="time" Style="width:160px">
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero de Ticket: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><input type="text" name="bit_tick" id="bit_tick" placeholder="8000878501"  pattern="[0-9a-zA-Z/-]+" style="width:160px" required="required" />
    </div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Estatus:</strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><select name="bit_estatus" id="bit_estatus" Style="width:160px" required>
												<option value="">Seleccione</option>
												<option>Abierto</option>
												<option>Cerrado</option>
											</select></div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Origen Causa: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><input type="text" name="bit_orig" id="bit_orig" placeholder="Origen"  pattern="[A-Za-z  ñáéíóú]+" style="width:160px" required="required" /></div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Alcance: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><select name="bit_alca" id="bit_alca" Style="width:160px" required>
												<option value="">Seleccione</option>
												<option>Aplicacion</option>
												<option>Productos y Servicios</option>
											</select></div></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Aplicaci&oacute;n o Servicio Afectado: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><input type="text" name="bit_afect" id="bit_afect" placeholder="Afectado"  pattern="[A-Za-z  ñáéíóú]+" style="width:160px" required="required" /></div></td>
  </tr>
  <tr>
    <td height="28" bgcolor="#f7f6f1"><div align="right"><strong>Observaciones de Soporte: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><textarea name="bit_obsersop" id="bit_obsersop" Style="width:400px; height:45px" placeholder="Observación textual" required></textarea></div></td>
  </tr>
  <tr>
    <td height="28" bgcolor="#f7f6f1"><div align="right"><strong>Observaciones Gestor: </strong></div></td>
    <td bgcolor="#f7f6f1"><div align="left"><textarea name="bit_obserges" id="bit_obserges" Style="width:400px; height:45px" placeholder="Resumir" required></textarea></div></td>
  </tr>
   <tr>
     <td height="28" colspan="2" bgcolor="#f7f6f1">&nbsp;</td>
   </tr>
   <tr>
    <td height="49" colspan="2" bgcolor="#f7f6f1"><div id="sumit" align="center">
										<input type="submit" name="Submit" value="Enviar" />
        								<input type="reset" name="Submit2" value="Borrar" /></div></td>
  </tr>
</table>


</form>
                <?php
require("../controlador/listar_bitacorareg.php");
?>


								</article>
				<!-- Sidebar -->
						<?php
require ("menu.php");
?>

	</body>
</html>