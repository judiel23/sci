<?php 
require('../modelo/mod_connex.php');
                               $conexion = new Connex();
                               $mysqlconn= $conexion->conectar();
                               
require("../modelo/mod_equipo.php");
 $consulta= new equipo();
 $listar=$consulta-> mostrar ($mysqlconn);
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
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Numero del Caso</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Canal receptor</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Nombre del usuario</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Estatus del Caso</div></th>
 </tr>
 </thead>
 <?php
 for($i=0; $i<mysqli_num_rows($listar); $i++){
 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $gar_nombges=$row["gar_nombges"];
 $gar_numcas=$row["gar_numcas"];
 $gar_canal=$row["gar_canal"];
 $gar_nomusu=$row["gar_nomusu"];
 $gar_estatus=$row["gar_estatus"];
 
 ?>
 <tr>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $gar_nombges;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $gar_numcas;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $gar_canal;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $gar_nomusu;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $gar_estatus;?>
     <?php }?>
 </span>
 </table>
 <?php }?>
