<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

					require("../modelo/mod_conatel.php");
					$consulta= new conatel();

					$listar=$consulta-> obtener ($mysqlconn);
					if(mysqli_num_rows($listar)>0){

					?>
          <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Gestor</div></th>
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Asunto</div></th>
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Abierto</div></th>
              <!--<th align="right">Canal receptor de la queja</th>-->
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Actualizado</div></th>
              <!--<th align="right">Ciudad de la OC</th>
              <th align="right">Fecha de Recepción del equipo en la OC</th>-->
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Estatus</div></th>
              <!--<th align="right">Observacion por parte de la OC</th>-->
              <!--<th align="right">Marca del equipo en garantia</th>
              <th align="right">Modelo del equipo en garantia</th>
              <th align="right">Observaciones del Gestor</th>-->
      </tr>
 </thead>
         <?php

                 for($i=0; $i<mysqli_num_rows($listar); $i++){
                 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);

                 $con_numcas=$row["con_numcas"];
                 $con_gestor=$row["con_gestor"];
                 $con_asun=$row["con_asun"];
                 $con_fechac=$row["con_fechac"];
                 $con_feulac=$row["con_feulac"];
                 $con_estatus=$row["con_estatus"];
        ?>
       <tr>

             <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $con_numcas;?> </div>
             <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $con_gestor;?> </div>
             <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $con_asun;?> </div>
             <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $con_fechac;?> </div>
             <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $con_feulac;?> </div>
             <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $con_estatus;?> </div>
             <!--<td><?php /*echo $gar_obseroc;*/?>-->
             <!--<td><?php /*echo $gar_marca;?>
             <!--<td><?php echo $gar_modelo;?>
             <!--<td><?php echo $gar_obserges;*/?>-->
      </tr>
<?php }?>
</table>
<?php }?>