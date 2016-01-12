<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();
$result = mysqli_query($mysqlconn,"SELECT * FROM info");
?>
<table width=" " border="1" bgcolor="" align="right" id="listado" >
<thead >
  <tr bgcolor="#dcdcdc" >
  <th align="center">Id</th>
  <th align="center">Gestor</th>
  <th align="center">Fecha Recepción</th>
  <th align="center">Fecha Respuesta</th>
  <th align="center">Escalado</th>
  <th align="center">Área</th>
  <th align="center">Resuelto</th>
  <th align="center">Nivel 1</th>
  <th align="center">Nivel 2</th>
  <th align="center">Nivel 3</th>
  <th align="center">Usuario</th>
  <th align="center">Correo</th>
  <th align="center">Teléfono Movilnet</th>
  <th align="center">Teléfono Contacto</th>
  <th align="center">Producto</th>
  <th align="center">Tecnología</th>
  <th align="center">Observación</th>
 </tr>
 </thead>
<?php
ob_start();
			 for($i=0; $i<mysqli_num_rows($result); $i++){
			 $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
			 $in_id=$row["in_id"];
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
			 $in_produc=$row["in_produc"];
			 $in_correo=$row["in_correo"];
			 $in_nummov=$row["in_nummov"];
			 $in_numcont=$row["in_numcont"];
			 $in_tecno=$row["in_tecno"];
			 $in_obser=$row["in_obser"];
			 ?>
			<tr>
			<td><?php echo $in_id;?></td>
			<td><?php echo $in_nomges;?></td>
			<td><?php echo $in_fecharec;?></td>
			<td><?php echo $in_fecharesp;?></td>
			<td><?php echo $in_esca;?></td>
			<td><?php echo $in_areaes;?></td>
			<td><?php echo $in_resuelto;?></td>
			<td><?php echo $in_niv1;?></td>
			<td><?php echo $in_niv2;?></td>
			<td><?php echo $in_niv3;?></td>
			<td><?php echo $in_nomusu;?></td>
			<td><?php echo $in_correo;?></td>
			<td><?php echo $in_nummov;?></td>
			<td><?php echo $in_numcont;?></td>
			<td><?php echo $in_produc;?></td>
			<td><?php echo $in_tecno;?></td>
			<td><?php echo $in_obser;?></td>
			</tr>
<?php }?>
</table>
<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=data_info.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_end_flush();
?>