<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();
$result = mysqli_query($mysqlconn,"SELECT * FROM garantia");
?>
<table width=" " border="1" bgcolor="" align="right" id="listado" >
<thead >
  <tr bgcolor="#dcdcdc" >
  <th align="center">id</th>
  <th align="center">Gestor</th>
  <th align="center">Número de Orden</th>
  <th align="center">fecha Recepción Queja</th>
  <th align="center">Canal</th>
  <th align="center">Fecha Escalado</th>
  <th align="center">Estatus</th>
  <th align="center">Oficina Comercial</th>
  <th align="center">Ciudad OC</th>
  <th align="center">Fecha Recepción Equipo</th>
  <th align="center">fecha Respuesta OC</th>
  <th align="center">Usuario</th>
  <th align="center">Número</th>
  <th align="center">Marca</th>
  <th align="center">Modelo</th>
  <th align="center">observación Usuario</th>
  <th align="center">observación Gestor</th>
  </tr>
 </thead>
<?php
ob_start();
			 for($i=0; $i<mysqli_num_rows($result); $i++){
			 $row= mysqli_fetch_array($result, MYSQLI_ASSOC);
			 $gar_cod=$row["gar_cod"];
			 $gar_nombges=$row["gar_nombges"];
			 $gar_numcas=$row["gar_numcas"];
			 $gar_fechardq=$row["gar_fechardq"];
			 $gar_canal=$row["gar_canal"];
			 $gar_fechaepg=$row["gar_fechaepg"];
			 $gar_nomoc=$row["gar_nomoc"];
			 $gar_ciuoc=$row["gar_ciuoc"];
			 $gar_fecharde=$row["gar_fecharde"];
			 $gar_fecharoc=$row["gar_fecharoc"];
			 $gar_obseroc=$row["gar_obseroc"];
			 $gar_nomusu=$row["gar_nomusu"];
			 $gar_numcel=$row["gar_numcel"];
			 $gar_marca=$row["gar_marca"];
			 $gar_modelo=$row["gar_modelo"];
			 $gar_obserges=$row["gar_obserges"];
			 $gar_estatus=$row["gar_estatus"];
			 ?>
			<tr>
			<td><?php echo $gar_cod;?></td>
			<td><?php echo $gar_nombges;?></td>
			<td><?php echo $gar_numcas;?></td>
			<td><?php echo $gar_fechardq;?></td>
			<td><?php echo $gar_canal;?></td>
			<td><?php echo $gar_fechaepg;?></td>
			<td><?php echo $gar_estatus;?></td>
			<td><?php echo $gar_nomoc;?></td>
			<td><?php echo $gar_ciuoc;?></td>
			<td><?php echo $gar_fecharde;?></td>
			<td><?php echo $gar_fecharoc;?></td>
			<td><?php echo $gar_nomusu;?></td>
			<td><?php echo $gar_numcel;?></td>
			<td><?php echo $gar_marca;?></td>
			<td><?php echo $gar_modelo;?></td>
			<td><?php echo $gar_obserges;?></td>
			<td><?php echo $gar_estatus;?></td>
			</tr>
<?php }?>
</table>
<?php
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=data_garantia.xls");
header("Pragma: no-cache");
header("Expires: 0");
ob_end_flush();
?>