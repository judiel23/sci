<?php 
require('../modelo/mod_connex.php');
                               $conexion = new Connex();
                               $mysqlconn= $conexion->conectar();
                               
require("../modelo/mod_empleado.php");
 $consulta= new empleado();
 $listar=$consulta-> mostrar ($mysqlconn);
    if(mysqli_num_rows($listar)>0){
                                                                              
?>
                                                                       
<table width=" " border="2" bgcolor="#dcdcdc" align="right" id="listado" >
<thead >
  <tr bgcolor="#000000" >
  <th align="center" bgcolor="#eeece1">Nombre</th>
  <th align="center" bgcolor="#eeece1">Apellido</th>
  <th align="center" bgcolor="#eeece1">Cedula</th>
 </tr>
 </thead>
 <?php
 for($i=0; $i<mysqli_num_rows($listar); $i++){
 $row= mysqli_fetch_array($listar, MYSQLI_ASSOC);
 $emp_nombre=$row["emp_nombre"];
 $emp_apellido=$row["emp_apellido"];
 $emp_cedula=$row["emp_cedula"]; 
 ?>
 <tr>
 <td align="center" bgcolor="#f7f6f1"><?php echo $emp_nombre;?>
 <td align="center" bgcolor="#f7f6f1"><?php echo $emp_apellido;?>
 <td align="center" bgcolor="#f7f6f1"><?php echo $emp_cedula;?>
 <?php }?>
</table>
 <?php }?>