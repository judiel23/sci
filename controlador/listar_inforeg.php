<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();


$gestor= $_SESSION['emp_login'];
					require("../modelo/mod_info.php");
					$consulta= new info();

					$listar=$consulta-> obtener ( $gestor, $mysqlconn);
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
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Gestor</div></th>
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Fecha de Respuesta</div></th>
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Causa de Contacto</div></th>
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Nombre de Usuario</div></th>
              <!--<th align="right">Canal receptor de la queja</th>-->
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Correo</div></th>
              <!--<th align="right">Ciudad de la OC</th>
              <th align="right">Fecha de Recepción del equipo en la OC</th>-->
              <th align="right" bgcolor="#eeece1"><div align="center" class="style2">Número Movilnet</div></th>
              <!--<th align="right">Observacion por parte de la OC</th>-->
              <!--<th align="right">Marca del equipo en garantia</th>
              <th align="right">Modelo del equipo en garantia</th>
              <th align="right">Observaciones del Gestor</th>-->
      </tr>
 </thead>
         <?php

                 for($i=0; $i<mysqli_num_rows($listar); $i++){
                 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);

                 $in_nomges=$row["in_nomges"];
                 $in_fecharesp=$row["in_fecharesp"];
                 $in_niv1=$row["in_niv1"];
                 $in_nomusu=$row["in_nomusu"];
                 $in_correo=$row["in_correo"];
                 $in_nummov=$row["in_nummov"];
        ?>
       <tr>

             <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $in_nomges;?> </div>
             <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $in_fecharesp;?> </div>
             <td bgcolor="#fcfcfa"><div align="center" class="style5"><?php echo $in_niv1;?> </div>
             <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $in_nomusu;?> </div>
             <td bgcolor="#fcfcfa"><div align="center" class="style5c"><?php echo $in_correo;?> </div>
             <td bgcolor="#f7f6f1"><div align="center" class="style5"><?php echo $gestor;?> </div>
             <!--<td><?php /*echo $gar_obseroc;*/?>-->
             <!--<td><?php /*echo $gar_marca;?>
             <!--<td><?php echo $gar_modelo;?>
             <!--<td><?php echo $gar_obserges;*/?>-->
      </tr>
<?php }?>
</table>
<?php }?>