<?php
require ("session.php");
?><!DOCTYPE HTML>

<html>
	<head>
		<title>Registro INFO</title>
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
		<script type="text/javascript">
			$("document").ready(function(){
				$("#in_niv1").load("../controlador/con_dependientes.php?cmd=in_nivel1")
				$("#in_niv1").change(function(){
					$("#in_niv3").empty();
					var id = $("#in_niv1").val();
					$.get("../controlador/con_dependientes.php?cmd=in_nivel2",{param_id:id})
					.done(function(data){
						$("#in_niv2").html(data);
					})
				})
			$("#in_niv2").change(function(){
					var id = $("#in_niv2").val();
					$.get("../controlador/con_dependientes.php?cmd=in_nivel3",{param_id:id})
					.done(function(data){
						$("#in_niv3").html(data);
					})
			})
			})
		</script>
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
									  <h2>Registro</h2>
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
										<span class="date"><span class="month">INFO@<span>y</span></span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
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
									<form action="../controlador/con_registrarinfo.php" method="post" >
									<table width="1000" height="299" border="1">
  <tr>
    <th colspan="4" bgcolor="#eeece1" scope="col"><div align="center"><strong>Datos del Caso </strong></div></th>
  </tr>
  <tr>
    <td width="300" height="23" bgcolor="#f7f6f1"><div align="right"><strong>Nombre Gestor:</strong></div></td>
    <td width="186" bgcolor="#f7f6f1"><input type="text" name="in_nomges" id="in_nomges" placeholder="Gestor"  pattern="[A-Za-z 0-9]+" style="width:160px" readonly="readonly" value="<?php echo $_SESSION['emp_login']; ?>" required></td>
    <td width="300" bgcolor="#f7f6f1"><div align="right"><strong>Escalado: </strong></div></td>
    <td width="186" bgcolor="#f7f6f1"><select name="in_esca" id="in_esca" Style="width:160px" required>
										<option value="">Seleccione</option>
										<option>Si</option>
										<option>No</option>
									  </select>
	</td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Recepci&oacute;n: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="in_fecharec" id="in_fecharec" type="date" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>&Aacute;rea: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="in_areaes" id="in_areaes" Style="width:160px" pattern="[A-Za-z  ñáéíóú]+" placeholder="Área"></input></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Respuesta:</strong></div></td>
    <td bgcolor="#f7f6f1"><input name="in_fecharesp" id="in_fecharesp" type="date" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Resuelto: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="in_resuelto" id="in_resuelto" Style="width:160px" required>
							<option value="">Seleccione</option>
							<option>Si</option>
							<option>No</option>
						  </select>
	 </td>
  </tr>
   <tr>
    <th colspan="4" bgcolor="#eeece1" scope="col"><div align="center"><strong>Tipificaci&oacute;n</strong></div></th>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nivel 1:</strong></div></td>
    <td bgcolor="#f7f6f1"><select name="in_niv1" id="in_niv1" pattern="[A-Za-z ]+" Style="width:160px"required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nivel 2: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="in_niv2" id="in_niv2" pattern="[A-Za-z ]+" Style="width:160px" required></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nivel 3 : </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="in_niv3" id="in_niv3" pattern="[A-Za-z ]+" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"></td>
    <td bgcolor="#f7f6f1"></td>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Usuario </strong></div></th>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nombre del Usuario: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="in_nomusu" id="in_nomusu" pattern="[A-Za-z  ñáéíóú]+" Style="width:160px" placeholder="Nombre Apellido" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero Movilnet:</strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><input type="text" name="in_nummov" id="in_nummov" pattern="[0-9]{10}" placeholder="4161234567" Style="width:160px"></td>
  </tr>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Correo:  </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="in_correo" id="in_correo" type="email" Style="width:160px" placeholder="nombre@dominio.com" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>N&uacute;mero de Contacto:</strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><input type="text" name="in_numcont" id="in_numcont" pattern="[0-9]{10}" placeholder="2121234567" Style="width:160px"></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Producto:  </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="in_produc" id="in_produc" pattern="[A-Za-Z0-9]+" Style="width:160px">
							<option value="">Seleccione</option>
							<option>Número No Indicado</option>
							<option>Pospago</option>
							<option>Prepago</option>
						  </select></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Tecnolog&iacute;a </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="in_tecno" id="in_tecno" pattern="[A-Za-Z0-9]+" Style="width:160px">
							<option value="">Seleccione</option>
							<option>N/A</option>
							<option>CDMA</option>
							<option>GSM</option>
						  </select></td>

  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></th>
  </tr>
   <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Observaci&oacute;n del Gestor: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1"><textarea name="in_obser" id="in_obser" placeholder="Resumir" maxlength="200" Style="width:630px; height:45px"required></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#eeece1"><div align="right"></div></td>
    <td colspan="2" bgcolor="#eeece1"><div id="sumit" align="center">
										<input type="submit" name="Submit" value="Enviar" />
        								<input type="reset" name="Submit2" value="Borrar" />
									  </div>	</td>
    <td bgcolor="#eeece1"></td>
  </tr>
</table>

</form>

 <?php
require("../controlador/listar_inforeg.php");
?>
								</article>


					         </div>
<?php
require ("menu.php");
?>

                        </div>
			</div>

	</body>
</html>