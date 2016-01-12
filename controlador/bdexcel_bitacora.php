<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();
$result = mysqli_query($mysqlconn,"SELECT * FROM bitacora");
?>
<table width=" " border="1" bgcolor="" align="right" id="listado" >
<thead >
  <tr bgcolor="#dcdcdc" >
  <th align="center">id</th>
  <th align="center">Gestor</th>
  <th align="center">Ticket</th>
  <th align="center">Origen</th>
  <th align="center">Fecha Inicio</th>
  <th align="center">Hora Inicio</th>
  <th align="center">Fecha Fin</th>
  <th align="center">Hora Fin</th>
  <th align="center">Alcance</th>
  <th align="center">Aplicacion / Servicio Afectado</th>
  <th align="center">Estatus</th>
  <th align="center">Observacción Soporte</th>
  <th align="center">Observación Gestor</th>
  </tr>
 </thead>
<?php
ob_start();
			 for($i=0; $i<mysqli_num_rows($result); $i++){
			 $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
			 $bit_id=$row["bit_id"];
			 $bit_gestor=$row["bit_gestor"];
			 $bit_tick=$row["bit_tick"];
			 $bit_orig=$row["bit_orig"];
			 $bit_fechaini=$row["bit_fechaini"];
			 $bit_horini=$row["bit_horini"];
			 $bit_fechafin=$row["bit_fechafin"];
			 $bit_horfin=$row["bit_horfin"];
			 $bit_alca=$row["bit_alca"];
			 $bit_afect=$row["bit_afect"];
			 $bit_estatus=$row["bit_estatus"];
			 $bit_obsersop=$row["bit_obsersop"];
			 $bit_obserges=$row["bit_obserges"];
			 ?>
			<tr>
			<td><?php echo $bit_id;?></td>
			<td><?php echo $bit_gestor;?></td>
			<td><?php echo $bit_tick;?></td>
			<td><?php echo $bit_orig;?></td>
			<td><?php echo $bit_fechaini;?></td>
			<td><?php echo $bit_horini;?></td>
			<td><?php echo $bit_fechafin;?></td>
			<td><?php echo $bit_horfin;?></td>
			<td><?php echo $bit_alca;?></td>
			<td><?php echo $bit_afect;?></td>
			<td><?php echo $bit_estatus;?></td>
			<td><?php echo $bit_obsersop;?></td>
			<td><?php echo $bit_obserges;?></td>
			</tr>
<?php }?>
</table>
<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=data_bitacora.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_end_flush();
?>