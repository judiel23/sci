<?php
require('../modelo/mod_connex.php');
                               $conexion = new Connex();
                               $mysqlconn= $conexion->conectar();

require("../modelo/mod_vozusu.php");
 $consulta= new voz_usuario();
 $listar=$consulta-> mostrar ($mysqlconn);
    if(mysqli_num_rows($listar)>0){

?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style4 {color: #000000}
#enlace {color: #fd6b1c; font-size: 24px;}
a:hover: {color: #fd461c}
-->
</style>


<table id=tablaregistro width=" " border="2" bgcolor="#dcdcdc" align="center" id="listado" >
<thead >
  <tr bgcolor="#000000" >
  <th align="center" bgcolor="#484848"><div align="center" class="style1"></div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Categoria</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Canal</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Responsable</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Fecha de Escalamiento</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Teléfono</div></th>
  <th align="center" bgcolor="#484848"><div align="center" class="style1">Estatus</div></th>
  </tr>
 </thead>
 <?php
 for($i=0; $i<mysqli_num_rows($listar); $i++){
 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $voz_id=$row["voz_id"];
 $voz_categoria=$row["voz_categoria"];
 $voz_canal=$row["voz_canal"];
 $voz_respon=$row["voz_respon"];
 $voz_fechaes=$row["voz_fechaes"];
 $voz_movil=$row["voz_movil"];
 $voz_estatus=$row["voz_estatus"];

 ?>
 <tr>
 <td align="center" bgcolor="#f7f6f1"><span class="style2"><a id="enlace" href="detalle_vozusu.php?caso=<?php echo $voz_id;?>"> &#187 </a>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $voz_categoria;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $voz_canal;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $voz_respon;?></a></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $voz_fechaes;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $voz_movil;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style4"><?php echo $voz_estatus;?></span>

     <?php }?>
 </span>
 </table>
 <?php }?>
