<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();
$result = mysqli_query($mysqlconn,"SELECT * FROM conatel");
?>
<table width=" " border="1" bgcolor="" align="right" id="listado" >
<thead >
  <tr bgcolor="#dcdcdc" >
  <th align="center">Número de Caso</th>
  <th align="center">Gestor</th>
  <th align="center">Fecha Creación</th>
  <th align="center">Asunto</th>
  <th align="center">Usuario</th>
  <th align="center">Número Movilnet</th>
  <th align="center">Número de Contacto</th>
  <th align="center">fecha Actualización</th>
  <th align="center">Estado</th>
  <th align="center">Estatus</th>
  <th align="center">Observación Usuario</th>
  <th align="center">Observación Gestor</th>
  <th align="center">Tipo de Caso</th>
  </tr>
 </thead>
<?php
ob_start();
			 for($i=0; $i<mysqli_num_rows($result); $i++){
			 $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
			 $con_numcas=$row["con_numcas"];
			 $con_gestor=$row["con_gestor"];
			 $con_fechac=$row["con_fechac"];
			 $con_nomusu=$row["con_nomusu"];
			 $con_numov=$row["con_numov"];
			 $con_numcontac=$row["con_numcontac"];
			 $con_estado=$row["con_estado"];
			 $con_obserusu=$row["con_obserusu"];
			 $con_feulac=$row["con_feulac"];
			 $con_asun=$row["con_asun"];
			 $con_obserges=$row["con_obserges"];
			 $con_estatus=$row["con_estatus"];
			 $con_tipocas=$row["con_tipocas"];
			 ?>
			<tr>
			<td><?php echo $con_numcas;?></td>
			<td><?php echo $con_gestor;?></td>
			<td><?php echo $con_fechac;?></td>
			<td><?php echo $con_asun;?></td>
			<td><?php echo $con_nomusu;?></td>
			<td><?php echo $con_numov;?></td>
			<td><?php echo $con_numcontac;?></td>
			<td><?php echo $con_feulac;?></td>
			<td><?php echo $con_estado;?></td>
			<td><?php echo $con_estatus;?></td>
			<td><?php echo $con_obserusu;?></td>
			<td><?php echo $con_obserges;?></td>
			<td><?php echo $con_tipocas;?></td>
			</tr>
<?php }?>
</table>
<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=data_Conatel.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_end_flush();
?>