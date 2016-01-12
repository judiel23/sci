<?php
require('../modelo/mod_connex.php');
                               $conexion = new Connex();
                               $mysqlconn= $conexion->conectar();

require("../modelo/mod_bitacora.php");
 $consulta= new bitacora();
 $listar=$consulta-> mostrarreg ($mysqlconn);
    if(mysqli_num_rows($listar)>0){

?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style4 {color: #000000}
-->
</style>


<table id=tablaregistro width=" " border="2" bgcolor="#dcdcdc" align="center" id="listado" >
<thead >
  <tr bgcolor="#000000" >
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Nombre del Gestor</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Fecha Inicio</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Origen</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Aplicación/Servicio Afectado</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Estatus</div></th>
  </tr>
 </thead>
 <?php
 for($i=0; $i<mysqli_num_rows($listar); $i++){
 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $bit_gestor=$row["bit_gestor"];
 $bit_fechaini=$row["bit_fechaini"];
 $bit_orig=$row["bit_orig"];
 $bit_afect=$row["bit_afect"];
 $bit_estatus=$row["bit_estatus"];

 ?>
 <tr>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $bit_gestor;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $bit_fechaini;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $bit_orig;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $bit_afect;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $bit_estatus;?></span>

     <?php }?>
 </span>
 </table>
 <?php }?>
