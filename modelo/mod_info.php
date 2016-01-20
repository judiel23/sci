<?php
class info{
	private $in_nomges;
	private $in_esca;
	private $in_fecharec;
	private $in_areaes;
	private $in_fecharesp;
	private $in_resuelto;
	private $in_niv1;
	private $in_niv2;
	private $in_niv3;
	private $in_nomusu;
	private $in_nummov;
	private $in_numcont;
	private $in_produc;
	private $in_tecno;
	private $in_correo;
	private $in_obser;
	private $gestor;

	private $mysqlconn;

	public function agregar($in_nomges, $in_esca, $in_fecharec, $in_areaes, $in_fecharesp, $in_resuelto, $in_niv1, $in_niv2, $in_niv3, $in_nomusu, $in_nummov, $in_numcont, $in_produc, $in_tecno, $in_correo, $in_obser, $mysqlconn){

	$query = "INSERT INTO info (in_nomges, in_esca, in_fecharec, in_areaes, in_fecharesp, in_resuelto, in_niv1, in_niv2, in_niv3, in_nomusu, in_nummov, in_numcont, in_produc, in_tecno, in_correo, in_obser)

	VALUES ('$in_nomges', '$in_esca', '$in_fecharec', '$in_areaes', '$in_fecharesp', '$in_resuelto','$in_niv1','$in_niv2', '$in_niv3', '$in_nomusu', '$in_nummov', '$in_numcont', '$in_produc', '$in_tecno', '$in_correo', '$in_obser')";

		$consulta= mysqli_query($mysqlconn,$query) or die("los datos no se registraron: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function agragar

	public function obtener($gestor, $mysqlconn){
		$query= "SELECT * FROM info where in_nomges='$gestor' ORDER BY in_id DESC LIMIT 1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function buscar($in_correo, $mysqlconn){
		$query= "SELECT * FROM info WHERE in_correo='$in_correo'";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function listar15($mysqlconn){
		$query= "SELECT * FROM info ORDER BY in_id";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener


}//class info
?>