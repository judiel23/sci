<?php
require('../modelo/mod_connex.php');
                               $conexion = new Connex();
                               $mysqlconn= $conexion->conectar();

require("../modelo/mod_empleado.php");
 $consulta= new empleado();
 $listar=$consulta-> lista ($mysqlconn);
    if(mysqli_num_rows($listar)>0){

?>
<style type="text/css">
<!--
.style1 {color: #000000}
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; }
-->
</style>


<table width=" " border="2" bgcolor="#dcdcdc" align="center" id="tablaregistro" >
<thead >
  <tr bgcolor="#000000" >
  <th align="center" bgcolor="#eeece1"><span class="style3">Nombre</span></th>
  <th align="center" bgcolor="#eeece1"><span class="style3">Apellido</span></th>
  <th align="center" bgcolor="#eeece1"><span class="style3">Cédula</span></th>
  <th align="center" bgcolor="#eeece1"><span class="style3">Usuario</span></th>
 </tr>
 </thead>
 <?php
 for($i=0; $i<mysqli_num_rows($listar); $i++){
 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $emp_nombre=$row["emp_nombre"];
 $emp_apellido=$row["emp_apellido"];
 $emp_cedula=$row["emp_cedula"];
 $emp_login=$row["emp_login"];
 ?>
 <tr>
 <td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_nombre;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_apellido;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_cedula;?></span>
 <td align="center" bgcolor="#f7f6f1"><span class="style1"><?php echo $emp_login;?>
     <?php }?>
 </span>
 </table>
 <?php }?>

