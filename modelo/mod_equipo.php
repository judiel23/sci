<?php
class equipo{
	private $gar_nombges;
	private $gar_numcas;
	private $gar_fechardq;
	private $gar_canal;
	private $gar_fechaepg;
	private $gar_nomoc;
	private $gar_fecharde;
	private $gar_fecharoc;
	private $gar_obseroc;
	private $gar_nomusu;
	private $gar_numcel;
	private $gar_marca;
	private $gar_modelo;
	private $gar_obserges;
	private $gar_estatus;

	private $mysqlconn;

	public function agregar($gar_nombges, $gar_numcas, $gar_fechardq, $gar_canal, $gar_fechaepg, $gar_nomoc, $gar_ciuoc, $gar_fecharde, $gar_fecharoc, $gar_obseroc, $gar_nomusu, $gar_numcel, $gar_marca, $gar_modelo, $gar_obserges, $gar_estatus, $mysqlconn){

	$query = "INSERT INTO garantia (gar_nombges, gar_numcas, gar_fechardq, gar_canal, gar_fechaepg, gar_nomoc, gar_ciuoc, gar_fecharde, gar_fecharoc, gar_obseroc, gar_nomusu, gar_numcel, gar_marca, gar_modelo, gar_obserges, gar_estatus)

	VALUES ('$gar_nombges', '$gar_numcas', '$gar_fechardq', '$gar_canal', '$gar_fechaepg', '$gar_nomoc','$gar_ciuoc','$gar_fecharde', '$gar_fecharoc', '$gar_obseroc', '$gar_nomusu', '$gar_numcel', '$gar_marca', '$gar_modelo', '$gar_obserges', '$gar_estatus')";

		$consulta= mysqli_query($mysqlconn,$query) or die("los datos no se registraron: ".mysqli_error($mysqlconn));

		return $consulta;

		}//function agragar


		public function autenticar($emp_login, $emp_clave, $mysqlconn){
			$query= "SELECT * FROM empleado WHERE emp_login='$emp_login' AND emp_clave='$emp_clave'";
			$consulta= mysqli_query($mysqlconn, $query) or die ("CONSULTA ERRADA: ".mysqli_error($mysqlconn));
			if($consulta){
				return $consulta;
				}//if autenticar
			}//function autenticar

	public function mostrar($mysqlconn){
		$query= "SELECT gar_nombges, gar_numcas, gar_canal, gar_nomusu, gar_estatus FROM garantia ORDER BY gar_cod DESC LIMIT 1";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if mostrar
		}//class mostrar

	public function obtener($mysqlconn){
		$query= "SELECT * FROM garantia";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function buscar($gar_numcas, $mysqlconn){
		$query= "SELECT * FROM garantia WHERE gar_numcas=$gar_numcas";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

		public function modificar($gar_numcas,$gar_obseroc,$gar_obserges,$gar_estatus,$gar_fecharde, $mysqlconn){
		$query="UPDATE garantia set gar_obseroc='$gar_obseroc', gar_obserges='$gar_obserges', gar_estatus='$gar_estatus', gar_fecharoc='$gar_fecharde' where gar_numcas='$gar_numcas'";
		$consulta= mysqli_query($mysqlconn, $query) or die ("Consulta Errónea: ".mysqli_error($mysqlconn));
		if($consulta){
			return ($consulta);
			}// if obtener
		}//class obtener

public function reporte($mysqlconn){
		$query= "SELECT * FROM garantia";
		$consulta= mysqli_query ($mysqlconn, $query);
		$resultado= mysqli_num_rows ($consulta);
		if($resultado){
			return($resultado);
			}
		}

		}//class empleado
?>