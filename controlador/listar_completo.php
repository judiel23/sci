<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

					require("../modelo/mod_equipo.php");
					$consulta= new equipo();

					$listar=$consulta-> obtener ($mysqlconn);
					if(mysqli_num_rows($listar)>0){

					?>
<style type="text/css">
<!--
.style2 {color: #000000; font-weight: bold; }
.style5 {color: #000000}
.style5c {color: #000000; font-size:13px;}
-->
</style>

					<table width="580px" border="1" align="left" id="listado">
					<thead>
  <tr>
  <!--<th align="right">Nombre del Gestor</th>-->
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Caso</div></th>
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Estatus</div></th>
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Recepcion de la queja</div></th>
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">OC</div></th>
  <!--<th align="right">Canal receptor de la queja</th>-->
  <!--<<th align="right" bgcolor="#eeece1"><div align="center" class="style2">Fecha de escalamiento</div></th>
  th align="right">Ciudad de la OC</th>
  <th align="right">Fecha de Recepción del equipo en la OC</th>
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Fecha de respuesta de la OC</div></th>-->
   <!--<th align="right">Observacion por parte de la OC</th>-->
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Usuario</div></th>
  <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Numero movilnet</div></th>
  <!--<th align="right">Marca del equipo en garantia</th>
  <th align="right">Modelo del equipo en garantia</th>
  <th align="right">Observaciones del Gestor</th>-->
  </tr>
 </thead>
 <?php
 for($i=0; $i<mysqli_num_rows($listar); $i++){
 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
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
 <!--<td><?php /* echo $gar_nombges; */?>-->
 <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $gar_numcas;?>
 </div>
 <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $gar_estatus;?> </div>
 <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $gar_fechardq;?>
       <!--<td><?php /*echo $gar_canal; */?>-->
 </div>
 <td bgcolor="#f7f6f1"><div align="center" class="style5c"><?php echo $gar_nomoc;?> </div>
 <!--<td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $gar_fechaepg;?>
 </div>
 <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $gar_fecharoc;?>
       <!--<td><?php /*echo $gar_obseroc;*/?>-->
 </div>
 <td bgcolor="#fcfcfa"><div align="center" class="style5c"><?php echo $gar_nomusu;?>
 </div>
 <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $gar_numcel;?>
       <!--<td><?php /*echo $gar_marca;?>
 <!--<td><?php echo $gar_modelo;?>
 <!--<td><?php echo $gar_obserges;*/?>-->
       <?php }?>
 </div>
 </table>
 <?php }?>