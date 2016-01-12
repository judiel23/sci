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
		<title>Registro Conatel</title>
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
										<span class="date"><span class="month">CONATEL</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
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
									<form action="../controlador/con_registroconatel.php" method="post" id="con">
									<table width="1000" height="299" border="1">
  <tr>
    <th colspan="4" bgcolor="#eeece1" scope="col"><div align="center"><strong>Datos del Caso </strong></div></th>
  </tr>
  <tr>
    <td width="242" height="23" bgcolor="#f7f6f1"><div align="right"><strong>Nombre Gestor:</strong></div></td>
    <td width="244" bgcolor="#f7f6f1"><input type="text" name="gestor" id="gestor" placeholder="Gestor"  pattern="[A-Za-z  ñáéíóú0-9]+" style="width:160px" readonly="readonly" value="<?php echo $_SESSION['emp_login']; ?>" required></td>
    <td width="242" bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero del caso: </strong></div></td>
    <td width="244" bgcolor="#f7f6f1"><input type="number" name="numcas" id="numcas" placeholder="151907"  pattern="[0-9]{6}" Style="width:160px" required></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Registro: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="fechac" id="fechac" type="date" style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Actualizaci&oacute;n: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="feulac" id="feulac" type="date" Style="width:160px" required></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Asunto:</strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="asun" id="asun" placeholder="Título del caso"  pattern="[A-Za-z  ñáéíóú]+" style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Estatus del Caso: </strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><select name="estatus" id="estatus" Style="width:160px" required>
        					<<option value="">Seleccione</option>
        					<option>Abierto</option>
        					<option>Cerrado</option>
      						</select>
      						</td>
	<tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Tipo de Caso:</strong></div></td>
    <td bgcolor="#f7f6f1"><select name="tipocas" id="tipocas" Style="width:160px" required>
        					<option value="">Seleccione</option>
        					<option>Avería</option>
        					<option>Comentarios</option>
        					<option>Consulta</option>
        					<option>Denuncias</option>
        					<option>Quejas</option>
        					<option>Reclamos</option>
        					<option>Solicitudes</option>
        					<option>Otros</option>
      						</select></td>
    <td bgcolor="#f7f6f1"><div align="right"></td>
    <td valign="top" bgcolor="#f7f6f1">	</td>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Usuario </strong></div></th>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nombre:</strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="nomusu" id="nomusu" pattern="[A-Za-z  ñáéíóú]+" Style="width:160px" placeholder="Nombre Apellido" required/></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Estado:</strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><select name="estado" required Style="width:160px">
							<option value="">Seleccione</option>
							<option>Amazonas</option>
							<option>Anzoátegui</option>
							<option>Apure</option>
							<option>Aragua</option>
							<option>Barinas</option>
							<option>Bolivar</option>
							<option>Carabobo</option>
							<option>Cojedes</option>
							<option>Delta Amacuro</option>
							<option>Dependencias federales</option>
							<option>Distrito Capital</option>
							<option>Falcón</option>
							<option>Guarico</option>
							<option>Lara</option>
							<option>Mérida</option>
							<option>Miranda</option>
							<option>Monagas</option>
							<option>Nueva Esparta</option>
							<option>Portuguesa</option>
							<option>Sucre</option>
							<option>Táchira</option>
							<option>Trujillo</option>
							<option>Yaracuy</option>
							<option>Vargas</option>
							<option>Zulia</option>
							</select>
	</td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero Movilnet: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="nummov" id="nummov"placeholder="4161234567" pattern="[0-9]{10}" Style="width:160px" required/></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero de Contacto: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="numcontac" id="numcontac" placeholder="4161234567" pattern="[0-9]{10}" Style="width:160px" /></td>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></th>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#f7f6f1"><div align="right"><strong>Observaci&oacute;n del Usuario: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1" valign=""><textarea name="obserusu" id="obserusu" Style="width:630px; height:45px" placeholder="Resumir" maxlength="200" required></textarea></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#f7f6f1"><div align="right"><strong>Observaci&oacute;n del Gestor: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1"><textarea name="obserges" id="obserges" Style="width:630px; height:45px" placeholder="Resumir" maxlength="200" required></textarea></td>
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
                <?php /*
require("../controlador/listar.php"); */
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