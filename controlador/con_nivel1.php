
<?php
$user = "root";
$pass = "";
$server = "localhost";
$bd = "movilnet";

$con = mysqli_connect($server,$user,$pass,$bd);

$result = mysqli_query($con,"SELECT * FROM primero");

WHILE ($ROW = mysqlI_FETCH_array($result)){
	echo '<option value="'.$ROW['IDnivel1'].'">'.$ROW['Nivel1'].'</option>';
}
?>