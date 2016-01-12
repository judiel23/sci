<?php
$lista1 = $_GET['param_id'];
$user = "root";
$pass = "";
$server = "localhost";
$bd = "movilnet";

$con = mysqli_connect($server,$user,$pass,$bd);

$result = mysqli_query($con,"SELECT * FROM tercero Where IDnivel2 = $lista1");

WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['IDnivel3'].'">'.$ROW['Nivel3'].'</option>';
}
?>