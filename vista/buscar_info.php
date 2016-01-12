<?php
require ("session.php");


$in_correo= $_POST['in_correo'];
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

					require("../modelo/mod_info.php");
					$consulta= new info();

					$listar=$consulta-> buscar ($in_correo, $mysqlconn);
					if(mysqli_num_rows($listar)<=0){
										echo "
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'Error!', text:'No Existen Casos Asociados Al Número Indicado', type: 'error',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/consulta_conatel.php'});
			            	</script>
</body>";

 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $in_nomges=$row["in_nomges"];
 $in_fecharec=$row["in_fecharec"];
 $in_fecharesp=$row["in_fecharesp"];
 $in_esca=$row["in_esca"];
 $in_areaes=$row["in_areaes"];
 $in_resuelto=$row["in_resuelto"];
 $in_niv1=$row["in_niv1"];
 $in_niv2=$row["in_niv2"];
 $in_niv3=$row["in_niv3"];
 $in_nomusu=$row["in_nomusu"];
 $in_correo=$row["in_correo"];
 $in_nummov=$row["in_nummov"];
 $in_produc=$row["in_produc"];
 $in_tecno=$row["in_tecno"];
 $in_obser=$row["in_obser"];

?>
	<link rel="icon" href="images/logot.png" type="image" sizes="16x16">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" type="image/png" href="images/logot.png"  />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
    <script type="text/javascript">


<!--
function showMe (it,div2,div3,div4,bot, box) {
var vis = (box.checked) ? "initial" : "none";

document.getElementById(it).style.display = vis;

document.getElementById(div2).style.display = vis;
document.getElementById(div3).style.display = vis;
document.getElementById(div4).style.display = vis;
document.getElementById(bot).style.display = vis;
}
//-->
</script>

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
	<title>Buscar</title>
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
									  <h2>Equipos En Garantía</h2>
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
										<span class="date"><span class="month">Consulta</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
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
									<!--<form align="right">
                                      <label>ACTUALIZAR</label>
                                      <div class="slideThree">
									  <input type="checkbox"  id="slideThree" name="check" style="visibility:hidden" onClick="showMe('div1','div3','div4','div5','bot', this)" >
									  <label for="slideThree"></label>
									  </div>
                                    </form>-->
									<form id="actualizar" method="post" action="../controlador/con_info.php">
									<table id=consultacaso border="1" align="left" width="54%" height="80%">
 <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Caso </strong></div></td>
   </tr>
 <tr>
 <td width="23%" bgcolor="#f7f6f1"><div align="right"><strong>Registrado Por: </strong></div></td>
 <td width="3%" bgcolor="#f7f6f1">&nbsp;</td>
 <td width="44%" bgcolor="#f7f6f1"><?php echo $in_nomges;?></td>
 <td width="28%" bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Recepción:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td><input type="hidden" name="numcas" value=<?php echo $in_fecharec;?>>
 <td bgcolor="#f7f6f1" name=""><?php echo $in_fecharec;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Respuesta:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_fecharesp;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Escalado:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_esca?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Área Escalamiento:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_areaes;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Resuelto:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php echo $in_resuelto;?></td>
   <td bgcolor="#f7f6f1"> <!--//-->
   <div id="div1" style="display:none" align="right">

<select name="estatus" id="estatus" Style="width:160px" required>
        <option value= <?php echo $gar_estatus;?>><?php echo $gar_estatus;?></option>

        <option>Cerrado</option>
      </select>


</div></td>
<!--//-->
 </tr>
 <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Tipificación</strong></div></td>
   </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Nivel 1:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_niv1;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Nivel 2:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_niv2;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Nivel 3:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_niv3;?></td>
 <td bgcolor="#f7f6f1">
 </tr>
 <!--<tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Respuesta:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php/* echo $gar_fecharde*/;?></td>
 <td bgcolor="#f7f6f1">&nbsp;-->
  <!-- <div id="div5" style="display:none" align="right">
<input type="date" name="fecharde" value=<?php echo $gar_fecharde;?> required>
   </div>
 </td>
//</td>
 </tr>-->
 <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del usuario </strong></div></td>
   </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Nombre:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_nomusu;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Correo:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_correo;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Número:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_nummov;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Producto:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_produc;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Tecnología:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_tecno;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></td>
   </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Observación del Gestor:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $in_obser;?></td>
 <td bgcolor="#f7f6f1">&nbsp; <!--//-->
 <div id="div3" style="display:none" align="right">

<textarea rows="2" name="obserges" required ><?php echo $gar_obserges;?></textarea>


</div></td>
<!--//--><td width="2%"></td>
 </tr>
 <!--<tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Observación de la OC:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php /* echo $gar_obseroc; */ ?></td>
   <td bgcolor="#f7f6f1">&nbsp;//-->
  <!-- <div id="div4" style="display:none" align="right">

<textarea rows="2" name="obseroc" required ><?php echo $gar_obseroc;?></textarea>


</div></td>
</td>
 </tr>-->
 <tr>
 <td colspan="4" bgcolor="#eeece1"><div align="right" class="style1">.</div></td>
 </tr>
 <tr>
 <!--//-->
 <td >&nbsp;</td>
 <td >&nbsp;</td>
 <td>
   <div id="bot" style="display:none" align="right">

<input type="submit" value="enviar">
<input type="reset" value="borrar">
<td bgcolor=>&nbsp;</td>

</div>
<!--//--></td>
 </tr>

 </table>

		</form>
	                        </article>



						</div>
					</div>

	<?php
require ("menu.php");
?>

					</div>

			</div>

</body>
<?php }?>