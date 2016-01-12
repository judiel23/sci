<?php
session_start();
$_SESSION['emp_login'];
$_SESSION['emp_perfil'];
$_SESSION['emp_clave'];
if(!isset($_SESSION['emp_login'])){
	header('Location: index.php');
	 }else{

		}
$con_numcas= $_POST['con_numcas'];
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

					require("../modelo/mod_conatel.php");
					$consulta= new conatel();

					$listar=$consulta-> buscar ($con_numcas, $mysqlconn);
					if(mysqli_num_rows($listar)<=0){
						echo "
<body>
						<meta http-equiv='content-type' content='text/html; charset=utf-8' />
							<link rel='stylesheet' type='text/css' href='sweetalert/lib/sweet-alert.css'>
							<script type='text/javascript' src='sweetalert/lib/sweet-alert.min.js' ></script>
							<script type='text/javascript'>swal({title:'Error!', text:'No Existen Casos Asociados Al Número Indicado', type: 'error',confirmButtonText:'Cerrar'},function(){window.location.href='../vista/consulta_conatel.php'});
			            	</script>
</body>";
						}else{

 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $con_id=$row["con_id"];
 $con_gestor=$row["con_gestor"];
 $con_numcas=$row["con_numcas"];
 $con_feulac=$row["con_feulac"];
 $con_asun=$row["con_asun"];
 $con_estatus=$row["con_estatus"];
 $con_nomusu=$row["con_nomusu"];
 $con_estado=$row["con_estado"];
 $con_numov=$row["con_numov"];
 $con_numcontac=$row["con_numcontac"];
 $con_obserges=$row["con_obserges"];
 $con_obserusu=$row["con_obserusu"];
 $con_fechac=$row["con_fechac"];
 $con_tipocas=$row["con_tipocas"];

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
									  <h2>Consulta</h2>
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
										<span class="date"><span class="month">CONATEL</span> <!--<span class="day">14</span><span class="year">, 2014</span></span>-->
										<!--
											Note: You can change the number of list items in "stats" to whatever you want.

										<ul class="stats">-->
											<!--<li><a href="#" class="icon fa-comment">16</a></li>
											<li><a href="#" class="icon fa-heart">32</a></li>
											<li><a href="#" class="icon fa-twitter">64</a></li>
											<li><a href="#" class="icon fa-facebook">128</a></li>-->
										</ul>
									</div>
									<form align="right">
                                      <label>ACTUALIZAR</label>
                                      <div class="slideThree">
									  <input type="checkbox"  id="slideThree" name="check" style="visibility:hidden" onClick="showMe('div1','div2','div3','div4','bot', this)" >
									  <label for="slideThree"></label>
									  </div>
                                    </form>
									<form id="actualizar" method="post" action="../controlador/con_modconatel.php?cas=<?php echo $con_id?>&ges=<?php echo $con_gestor?>">
									<table id=consultacaso border="1" align="left" width="54%" height="80%">
 <tr>
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Datos del Caso </strong></div></td>
   </tr>
 <tr>
 <td width="23%" bgcolor="#f7f6f1"><div align="right"><strong>Registrado Por: </strong></div></td>
 <td width="3%" bgcolor="#f7f6f1">&nbsp;</td>
 <td width="44%" bgcolor="#f7f6f1" id="con_gestor" name="con_gestor"><?php echo $con_gestor;?></td>
 <td width="28%" bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Número de Caso:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1" id="con_numcas" name="con_numcas"><?php echo $con_numcas?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Creación:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td><input type="hidden" name="numcas" value=<?php echo $con_fechac;?>>
 <td bgcolor="#f7f6f1" ><?php echo $con_fechac;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Fecha de Actualización:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_feulac;?></td>
 <td bgcolor="#f7f6f1"> <!--//-->
   		<div id="div1" style="display:none" align="right" >
				<input type="date" Style="width:160px" value=<?php echo $con_feulac;?> id="con_feulac" name="con_feulac">


		</div></td>
<!--//-->
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Asunto:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_asun;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Tipo:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_tipocas;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Estatus:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_estatus;?></td>
 <td bgcolor="#f7f6f1"><!--//-->
   		<div id="div2" style="display:none" align="right">
				<select name="estatus" id="estatus" Style="width:160px" required>
        			<option value= <?php echo $con_estatus;?>><?php echo $con_estatus;?></option>
        			<option>Cerrado</option>
     			 </select>


		</div></td>
<!--//-->
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Usuario:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_nomusu;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
  <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Estado:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_estado;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Número Movilnet:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_numov;?></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Número de Contacto:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_numcontac;?></td>
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
   <td colspan="4" bgcolor="#eeece1"><div align="center"><strong>Observaciones</strong></div></td>
   </tr>
 <tr>
 <td bgcolor="#f7f6f1"><div align="right"><strong>Observación del Gestor:</strong></div></td>
 <td bgcolor="#f7f6f1">&nbsp;</td>
 <td bgcolor="#f7f6f1"><?php echo $con_obserges;?></td>
 <td bgcolor="#f7f6f1"> <!--//-->
 <div id="div3" style="display:none" align="right">

<textarea rows="2" name="con_obserges" id="con_obserges" required ><?php echo $con_obserges;?></textarea>


</div></td>
<!--//--><td width="2%"></td>
 </tr>
 <tr>
   <td bgcolor="#f7f6f1"><div align="right"><strong>Observación del Usuario:</strong></div></td>
   <td bgcolor="#f7f6f1">&nbsp;</td>
   <td bgcolor="#f7f6f1"><?php  echo $con_obserusu; ?></td>
   <td bgcolor="#f7f6f1">
   				<div id="div4" style="display:none" align="right">
				<textarea rows="2" name="con_obserusu" id="con_obserusu" required ><?php echo $con_obserusu;?></textarea>


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