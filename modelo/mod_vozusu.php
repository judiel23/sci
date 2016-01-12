<?php
class voz_usuario{
	private $voz_id;
	private $voz_via;
	private $voz_detalle;
	private $voz_usuario;
	private $voz_movil;
	private $voz_tecno;
	private $voz_plantea;
	private $voz_categoria;
	private $voz_subcat;
	private $voz_observa;
	private $voz_canal;
	private $voz_respon;
	private $voz_fechaes;
	private $voz_fechaci;
	private $voz_estatus;
	private $voz_gestor;

	private $mysqlconn;

	public function agregar($voz_via, $voz_detalle, $voz_usuario, $voz_movil, $voz_tecno, $voz_plantea, $voz_categoria, $voz_subcat, $voz_observa, $voz_canal, $voz_respon, $voz_fechaes, $voz_fechaci, $voz_estatus, $voz_gestor, $mysqlconn){

	$query = "INSERT INTO voz_usuario (voz_via, voz_detalle, voz_usuario, voz_movil, voz_tecno, voz_plantea, voz_categoria, voz_subcat, voz_observa, voz_canal, voz_respon, voz_fechaes, voz_fechaci, voz_estatus, voz_gestor)

	VALUES ('$voz_via', '$voz_detalle', '$voz_usuario', '$voz_movil', '$voz_tecno', '$voz_plantea','$voz_categoria','$voz_subcat', '$voz_observa', '$voz_canal', '$voz_respon', '$voz_fechaes', '$voz_fechaci', '$voz_estatus', '$voz_gestor')";

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

	public function detalle($voz_id, $mysqlconn){
		$query= "SELECT * FROM voz_usuario";
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

		public function mostrar($mysqlconn){
		$query= "SELECT * FROM voz_usuario ORDER BY voz_id DESC LIMIT 20";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener


}//class info
?>