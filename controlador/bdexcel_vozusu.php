<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();
$result = mysqli_query($mysqlconn,"SELECT * FROM voz_usuario");
?>
<table width=" " border="1" bgcolor="" align="right" id="listado" >
<thead >
  <tr bgcolor="#dcdcdc" >
  <th align="center">ID</th>
  <th align="center">VIA</th>
  <th align="center">detalle</th>
  <th align="center">usuario</th>
  <th align="center">movil</th>
  <th align="center">tecnologia</th>
  <th align="center">escalado</th>
  <th align="center">planteamiento</th>
  <th align="center">categoria</th>
  <th align="center">subcategoria</th>
  <th align="center">canal</th>
  <th align="center">responsable</th>
  <th align="center">observacion</th>
  <th align="center">estatus</th>
  <th align="center">cierre</th>
  <th align="center">gestor</th>
  </tr>
 </thead>
<?php
ob_start();
			 for($i=0; $i<mysqli_num_rows($result); $i++){
			 $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
			 $voz_id=$row["voz_id"];
			 $voz_via=$row["voz_via"];
			 $voz_detalle=$row["voz_detalle"];
			 $voz_usuario=$row["voz_usuario"];
			 $voz_movil=$row["voz_movil"];
			 $voz_tecno=$row["voz_tecno"];
			 $voz_fechaes=$row["voz_fechaes"];
			 $voz_plantea=$row["voz_plantea"];
			 $voz_categoria=$row["voz_categoria"];
			 $voz_subcat=$row["voz_subcat"];
			 $voz_canal=$row["voz_canal"];
			 $voz_respon=$row["voz_respon"];
			 $voz_observa=$row["voz_observa"];
			 $voz_estatus=$row["voz_estatus"];
			 $voz_fechaci=$row["voz_fechaci"];
			 $voz_gestor=$row["voz_gestor"];
			 ?>
			<tr>
			<td><?php echo $voz_id;?></td>
			<td><?php echo $voz_via;?></td>
			<td><?php echo $voz_detalle;?></td>
			<td><?php echo $voz_usuario;?></td>
			<td><?php echo $voz_movil;?></td>
			<td><?php echo $voz_tecno;?></td>
			<td><?php echo $voz_fechaes;?></td>
			<td><?php echo $voz_plantea;?></td>
			<td><?php echo $voz_categoria;?></td>
			<td><?php echo $voz_subcat;?></td>
			<td><?php echo $voz_canal;?></td>
			<td><?php echo $voz_respon;?></td>
			<td><?php echo $voz_observa;?></td>
			<td><?php echo $voz_estatus;?></td>
			<td><?php echo $voz_fechaci;?></td>
			<td><?php echo $voz_gestor;?></td>
			</tr>
<?php }?>
</table>
<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=data_vozusuario.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_end_flush();
?>