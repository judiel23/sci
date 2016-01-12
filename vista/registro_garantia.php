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
		<title>Registro Equipo</title>
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
										<span class="date"><span class="month">Garantía<span>y</span></span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
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
									<form action="../controlador/con_registrarequipo.php" method="post">
									<table height="299" border="1">
  <tr>
    <th colspan="4" bgcolor="#eeece1" scope="col"><div align="center"><strong>Datos del Caso </strong></div></th>
  </tr>
  <tr>
    <td width="28%" bgcolor="#f7f6f1"><div align="right"><strong>Nombre Gestor:</strong></div></td>
    <td width="21%" bgcolor="#f7f6f1"><input type="text" name="nombges" id="nombges" placeholder="Gestor"  pattern="[A-Za-z  ñáéíóú]+" style="width:160px" readonly="readonly" value="<?php echo $_SESSION['emp_login']; ?>" required></td>
    <td width="25%" bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero del Caso: </strong></div></td>
    <td width="26%" bgcolor="#f7f6f1"><input type="number" name="numcas" id="numcas" placeholder="8000878501"  pattern="[0-9]{10}" style="width:160px" required="required" /></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Recepci&oacute;n de la Queja: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="fechardq" id="fechardq" type="date" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Canal Receptor de la Queja: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="canal" id="canal" Style="width:160px" required>
							<option value="">Seleccione</option>
							<option>@SomosMovilnet</option>
							<option>Info</option>
							</select>
	</td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Escalamiento :</strong></div></td>
    <td bgcolor="#f7f6f1"><input name="fechaepg" id="fechaepg" type="date" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Estatus del Caso: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="estatus" id="estatus" Style="width:160px" required>
							<option value="">Seleccione</option>
							<option>Abierto</option>
							<option>Cerrado</option>
						  </select>
	</td>
  </tr>
   <tr>
    <th colspan="4" bgcolor="#eeece1" scope="col"><div align="center"><strong>Datos Oficina Comercial </strong></div></th>
  </tr>
  <tr>
    <td height="23" bgcolor="#f7f6f1"><div align="right"><strong>Oficina Comercial:</strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="nomoc" id="nomoc2" pattern="[A-Za-z  ñáéíóú]+" Style="width:160px" placeholder="OC" required/></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Ciudad: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="ciuoc" id="nomoc" pattern="[A-Za-z  ñáéíóú]+" Style="width:160px" placeholder="Caracas" required/></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Recepci&oacute;n del Equipo: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="fecharde" id="fecharde" type="date" style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Respuesta: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="fecharoc" id="fecharoc" type="date" Style="width:160px"></td>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Usuario </strong></div></th>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nombre del Usuario: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="nomusu" id="nomusu" pattern="[A-Za-z  ñáéíóú]+" Style="width:160px" placeholder="Nombre Apellido" required/></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero Movilnet:</strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><input type="number" name="numcel" id="numcel" pattern="[0-9]{10}" placeholder="4161234567" Style="width:160px" required/></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Marca del Equipo:  </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="marca" id="marca" pattern="[A-Za-Z  ñáéíóú0-9]+" Style="width:160px" placeholder="Marca" required/></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Modelo de Equipo: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="modelo" id="modelo" pattern="[A-Za-Z  ñáéíóú0-9]+" Style="width:160px" placeholder="Modelo" required/></td>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></th>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#f7f6f1"><div align="right"><strong>Observaci&oacute;n del Usuario: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1"><textarea name="obseroc" id="obseroc" maxlength="200" Style="width:630px; height:45px" placeholder="Resumir" required></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Observaci&oacute;n del Gestor: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1"><textarea maxlength="200" name="obserges" id="obserges" Style="width:630px; height:45px" placeholder="Resumir" required></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#eeece1"><div align="right"></div></td>
    <td colspan="2" bgcolor="#eeece1"><div id="sumit" align="center">
										<input type="submit" name="Submit" value="Enviar" />
        								<input type="reset" name="Submit2" value="Borrar" />
									  </div>
	</td>
    <td bgcolor="#eeece1"></td>
  </tr>
</table>


</form>
                <?php
require("../controlador/listar.php");
?>


								</article>

							<!-- Post
								<article class="box post post-excerpt">
									<header>
										<h2><a href="#">Lorem ipsum dolor sit amet</a></h2>
										<p>Feugiat interdum sed commodo ipsum consequat dolor nullam metus</p>
									</header>
									<div class="info">
										<span class="date"><span class="month">Jul<span>y</span></span> <span class="day">8</span><span class="year">, 2014</span></span>
										<ul class="stats">
											<li><a href="#" class="icon fa-comment">16</a></li>
											<li><a href="#" class="icon fa-heart">32</a></li>
											<li><a href="#" class="icon fa-twitter">64</a></li>
											<li><a href="#" class="icon fa-facebook">128</a></li>
										</ul>
									</div>
									<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<p>
										Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
										Nunc nulla velit, fermentum quis interdum quis, tate etiam commodo lorem ipsum dolor sit amet dolore.
										Quisque vel sapien sit amet tellus elementum ultricies. Nunc vel orci turpis. Donec id malesuada metus.
										Nunc nulla velit, fermentum quis interdum quis, convallis eu sapien. Integer sed ipsum ante.
									</p>
								</article> -->

							<!-- Pagination
								<div class="pagination">
									<!--<a href="#" class="button previous">Previous Page</a>
									<div class="pages">
										<a href="#" class="active">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#">4</a>
										<span>&hellip;</span>
										<a href="#">20</a>
									</div>
									<a href="#" class="button next">Next Page</a>
								</div>-->

						</div>
					</div>

				<!-- Sidebar -->
						<?php
require ("menu.php");
?>

	</body>
</html>