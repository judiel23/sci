<?php
session_start();
$_SESSION['emp_login'];
$_SESSION['emp_perfil'];
$_SESSION['emp_clave'];
if(!isset($_SESSION['emp_login'])){
	header('Location: index.php');
	 }else{

		}
$voz_id= $_GET['caso'];
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

					require("../modelo/mod_vozusu.php");
					$consulta= new voz_usuario();

					$listar=$consulta-> detalle($voz_id, $mysqlconn);
					if(mysqli_num_rows($listar)>=0){

 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $voz_id=$row["voz_id"];
 $voz_gestor=$row["voz_gestor"];
 $voz_estatus=$row["voz_estatus"];
 $voz_fechaes=$row["voz_fechaes"];
 $voz_canal=$row["voz_canal"];
 $voz_fechaci=$row["voz_fechaci"];
 $voz_respon=$row["voz_respon"];
 $voz_categoria=$row["voz_categoria"];
 $voz_subcat=$row["voz_subcat"];
 $voz_usuario=$row["voz_usuario"];
 $voz_movil=$row["voz_movil"];
 $voz_tecno=$row["voz_tecno"];
 $voz_via=$row["voz_via"];
 $voz_detalle=$row["voz_detalle"];
 $voz_plantea=$row["voz_plantea"];
 $voz_observa=$row["voz_observa"];


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
function showMe (it,div1,div2,div3,div4,div5,bot, box) {
var vis = (box.checked) ? "initial" : "none";

document.getElementById(it).style.display = vis;
document.getElementById(div1).style.display = vis;
document.getElementById(div2).style.display = vis;
document.getElementById(div3).style.display = vis;
document.getElementById(div4).style.display = vis;
document.getElementById(div5).style.display = vis;
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
									  <h2>Detalle Voz del Usuario</h2>
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
									<form align="right">
                                      <label>ACTUALIZAR</label>
                                      <div class="slideThree">
									  <input type="checkbox"  id="slideThree" name="check" style="visibility:hidden" onClick="showMe('div1','div2','div3','div4','div5','div6','bot', this)" >
									  <label for="slideThree"></label>
									  </div>
                                    </form>
									<form id="actualizar" method="post" action="../controlador/con_actbitacora.php?id=<?php echo $bit_id;?>">
									<table id=consultacaso border="1" align="left" width="54%" height="80%">
 <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Caso </strong></div></td>
   </tr>
 <tr>
 <td width="23%" bgcolor="#f7f6f1"><div align="right"><strong>Registrado Por: </strong></div></td>
 <td width="3%" bgcolor="#f7f6f1">&nbsp;</td>
 <td width="44%" bgcolor="#f7f6f1"><?php echo $voz_gestor;?></td>
 <td width="28%" bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Estatus:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td><input type="hidden" name="numcas" value=<?php echo $voz_estatus;?>>
 <td bgcolor="#f7f6f1" name=""><?php echo $voz_estatus;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha Escalamiento:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td><input type="hidden" name="numcas" value=<?php echo $voz_fechaes;?>>
 <td bgcolor="#f7f6f1" name=""><?php echo $voz_fechaes;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Canal de Atención:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $voz_canal;?></td>
 <td bgcolor="#f7f6f1"><div id="div1" style="display:none" align="right">

<input id="fechafin" name="fechafin" type="date" required value=<?php echo $voz_canal;?>>
</div></td>
 </tr>
  <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Cierre:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $voz_fechaci;?></td>
 <td bgcolor="#f7f6f1"><div id="div2" style="display:none" align="right">

<input id="horfin" name="horfin" type="time" value=<?php echo $voz_fechaci;?>>
</div></td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Responsable:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $voz_respon?></td>
 <td bgcolor="#f7f6f1"><div id="div3" style="display:none" align="right">

<input id="ticket" name="ticket" type="text" required value=<?php echo $voz_respon;?>>




</div></td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Categoría:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $voz_categoria;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Sub-Categoría:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php echo $voz_subcat;?></td>
   <td bgcolor="#f7f6f1">
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Usuario:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php echo $voz_usuario;?></td>
   <td bgcolor="#f7f6f1">
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Teléfono:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $voz_movil;?></td>
 <td bgcolor="#f7f6f1"><!--//-->
   <div id="div4" style="display:none" align="right">

<select name="estatus" id="estatus" Style="width:160px" required>
        <option value= <?php echo $voz_movil;?>><?php echo $voz_movil;?></option>

        <option>Cerrado</option>
      </select>


</div></td>
<tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>tecnología:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php echo $voz_tecno;?></td>
   <td bgcolor="#f7f6f1">
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Vía de Notificación:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php echo $voz_via;?></td>
   <td bgcolor="#f7f6f1">
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Detalle de Notificación:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php echo $voz_detalle;?></td>
   <td bgcolor="#f7f6f1">
 </tr>
<!--//-->
  <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></td>
   </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Planteamiento:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $voz_plantea;?></td>
 <td bgcolor="#f7f6f1">&nbsp; <!--//-->
 <div id="div5" style="display:none" align="right">

<textarea rows="2" name="obserges" id="obserges" required ><?php echo $voz_plantea;?></textarea>


</div></td>
<!--//--><td width="2%"></td>
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Observación:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php  echo $voz_observa;  ?></td>
   <td bgcolor="#f7f6f1">&nbsp;<!--//-->
  <div id="div6" style="display:none" align="right">

<textarea rows="2" name="obsersop" id="obsersop" required ><?php echo $voz_observa;?></textarea>


</div></td>
</td>
 </tr>
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