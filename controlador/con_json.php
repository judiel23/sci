<?php



		$query= "SELECT * FROM garantia";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));

		if($consulta){

			 for($i=0; $i<mysqli_num_rows($consulta); $i++){
 $row= mysqli_fetch_array($consulta, MYSQLI_ASSOC);
 $a=$row["gar_cod"];
 $b=$row["gar_nombges"];

 $array[$i] = array( 'label'=>$b,'value' =>$a );

	$cons=json_encode($array[$i]);




		echo" $cons,";
			}
			}// if obtener





?>