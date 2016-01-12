<?php
require('../modelo/mod_connex.php');
		$conexion = new Connex();
		$mysqlconn= $conexion->conectar();

$nivel = $_GET['cmd'];

if  ($nivel=="in_nivel1"){
	$lista1 = $_GET['param_id'];
$result = mysqli_query($mysqlconn,"SELECT * FROM primero");
WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['IDnivel1'].'">'.$ROW['Nivel1'].'</option>';
	echo $_GET['cmd'];
}}

elseif  ($nivel=="in_nivel2"){
	$lista1 = $_GET['param_id'];
$result = mysqli_query($mysqlconn,"SELECT * FROM segundo Where IDnivel1 = $lista1");
WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['IDnivel2'].'">'.$ROW['Nivel2'].'</option>';
}}

elseif  ($nivel=="in_nivel3"){
	$lista1 = $_GET['param_id'];
$result = mysqli_query($mysqlconn,"SELECT * FROM tercero Where IDnivel2 = $lista1");
WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['IDnivel3'].'">'.$ROW['Nivel3'].'</option>';
}}
elseif  ($nivel=="voz_nivel1"){
	$lista1 = $_GET['param_id'];
$result = mysqli_query($mysqlconn,"SELECT * FROM voz_niv1");
WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['id_niv1'].'">'.$ROW['nivel1'].'</option>';
}}
elseif  ($nivel=="voz_nivel2"){
	$lista1 = $_GET['param_id'];
$result = mysqli_query($mysqlconn,"SELECT * FROM voz_niv2 Where id_niv1 = $lista1");
WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['id_niv2'].'">'.$ROW['nivel2'].'</option>';
}}
?>