<?php
session_start();
$_SESSION['emp_login'];
$_SESSION['emp_perfil'];
$_SESSION['emp_clave'];
if(!isset($_SESSION['emp_login'])){
	header('Location: index.php');
	 }else{

		}
?><!DOCTYPE HTML>
<!--
	Striped by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Registro Voz del Usuario</title>
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
				$("#voz_categoria").load("../controlador/con_dependientes.php?cmd=voz_nivel1")
				$("#voz_categoria").change(function(){
					var id = $("#voz_categoria").val();
					$.get("../controlador/con_dependientes.php",{param_id:id,cmd:"voz_nivel2"})
					.done(function(data){
						$("#voz_subcat").html(data);
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
										<span class="date"><span class="month">Voz del Usuario</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
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
									<form action="../controlador/con_registrarvoz.php" method="post" >
									<table width="1000" height="299" border="1">
  <tr>
    <th colspan="4" bgcolor="#eeece1" scope="col"><div align="center"><strong>Datos del Caso </strong></div></th>
  </tr>
  <tr>
    <td width="300" height="23" bgcolor="#f7f6f1"><div align="right"><strong>Nombre Gestor:</strong></div></td>
    <td width="186" bgcolor="#f7f6f1"><input type="text" name="voz_gestor" id="voz_gestor" placeholder="Gestor"  pattern="[A-Za-z 0-9]+" style="width:160px" readonly="readonly" value="<?php echo $_SESSION['emp_login']; ?>" required></td>
    <td width="300" height="23" bgcolor="#f7f6f1"><div align="right"><strong>Estatus:</strong></div></td>
    <td width="186" bgcolor="#f7f6f1"><select name="voz_estatus" id="voz_estatus" style="width:160px"required>
    									<option value="">Seleccione</option>
										<option>En Proceso</option>
										<option>Culminado</option>
										</select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Escalamiento: </strong></div></td>
    <td bgcolor="#f7f6f1"><input name="voz_fechaes" id="voz_fechaes" type="date" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Canal de Atención: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="voz_canal" id="voz_canal" Style="width:160px" required>
							<option value="">Seleccione</option>
							<option>*611 / VOCEM</option>
							<option>*611 / EPSD</option>
							<option>*611 / DIRECTA GROUP</option>
							<option>*611 / PEGASO</option>
							<option>*1 / EMERGENCIAS</option>
							<option>*GLOBAL / ROAMING</option>
							<option>TIENDA VIRTUAL</option>
							<option>INFO@</option>
							<option>@SOMOSMOVILNET</option>
							<option>OTRO</option>
						  </select>
	</td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Cierre:</strong></div></td>
    <td bgcolor="#f7f6f1"><input name="voz_fechaci" id="voz_fechaci" type="date" Style="width:160px" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Responsable: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="voz_respon" id="voz_respon" Style="width:160px" required>
							<option value="">Seleccione</option>
							<option>Coord. Movilnet (Vocem)</option>
							<option>Coord. Movilnet (EPSD)</option>
							<option>Coord. Movilnet (Directa G.)</option>
							<option>Coord. Movilnet (Pegaso)</option>
							<option>Coord. *1</option>
							<option>Coord. Roaming</option>
							<option>Sup. Roaming</option>
							<option>Coord. Tienda Virtual</option>
							<option>Sup. Tienda Virtual</option>
							<option>Coord. Atención Virtual</option>
							<option>Sup. Atención Virtual</option>
							<option>Gerente ACNP</option>
							<option>Director(a) ACNP</option>
						  </select>
	 </td>
  </tr>
    <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Categoría:</strong></div></td>
    <td bgcolor="#f7f6f1"><select name="voz_categoria" id="voz_categoria" pattern="[A-Za-z ]+" Style="width:160px"required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Sub categoría: </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="voz_subcat" id="voz_subcat" pattern="[A-Za-z ]+" Style="width:160px" required></td>
  </tr>
  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Usuario </strong></div></th>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Nombre del Usuario: </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="voz_usuario" id="voz_usuario" pattern="[A-Za-z ]+" Style="width:160px" placeholder="Nombre Apellido" required></td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Número Movilnet:</strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><input type="text" name="voz_movil" id="voz_movil" pattern="[0-9]{10}" placeholder="4161234567" Style="width:160px"></td>
  </tr>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Tecnología:  </strong></div></td>
    <td bgcolor="#f7f6f1"><select name="voz_tecno" id="voz_tecno" pattern="[A-Za-Z0-9]+" Style="width:160px">
							<option value="">Seleccione</option>
							<option>PREP-CDMA</option>
							<option>PREP-GSM</option>
							<option>POSP-CDMA</option>
							<option>POSP-GSM</option>
						  </select>
	</td>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Vía de Notificación:</strong></div></td>
    <td valign="top" bgcolor="#f7f6f1"><select name="voz_via" id="voz_via" pattern="[A-Za-Z0-9]+" Style="width:160px">
							<option value="">Seleccione</option>
							<option>SISE (VOZ USUARIO)</option>
							<option>INFO@</option>
							<option>@SOMOSMOVILNET</option>
							<option>REFERIDO</option>
							<option>OTRO</option>
						  </select>
	</td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Detalle de Notificación:  </strong></div></td>
    <td bgcolor="#f7f6f1"><input type="text" name="voz_detalle" id="voz_detalle" pattern="[A-Za-Z0-9]" placeholder="detalle" Style="width:160px"></td>
    <td bgcolor="#f7f6f1"></td>
    <td bgcolor="#f7f6f1"></td>

  <tr>
    <th colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></th>
  </tr>
   <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Planteamiento del caso: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1"><textarea name="voz_plantea" id="voz_plantea" placeholder="Resumir" maxlength="200" Style="width:630px; height:45px"required></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#f7f6f1"><div align="right"><strong>Observacion de Gestión: </strong></div></td>
    <td colspan="3" bgcolor="#f7f6f1"><textarea name="voz_observa" id="voz_observa" placeholder="Resumir" maxlength="200" Style="width:630px; height:45px"required></textarea></td>
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
/*
require("../controlador/listar_inforeg.php");
*/?>
								</article>


					         </div>
<?php
require ("menu.php");
?>

                        </div>
			</div>

	</body>
</html>