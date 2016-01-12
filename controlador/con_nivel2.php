<?php
$lista1 = $_GET['param_id'];
$user = "root";
$pass = "";
$server = "localhost";
$bd = "movilnet";

$con = mysqli_connect($server,$user,$pass,$bd);

$result = mysqli_query($con,"SELECT * FROM segundo Where IDnivel1 = $lista1");

WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['IDnivel2'].'">'.$ROW['Nivel2'].'</option>';
}
?>