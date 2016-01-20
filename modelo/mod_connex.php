<?php
Class connex{
	private $usuario;
	private $clave;
	private $servidor;
	private $bd;
	private $puerto;
	private $mysqlconn;

	public function connex(){
		$this->usuario='atevir';//'atevir';
		$this->clave='atevir';//'atevir';
		$this->servidor='192.168.210.130';//'192.168.210.130';
		$this->bd='sci';
		$this->puerto='3306';
		$this->mysqlconn=' ';

		}
		public function conectar(){
		$this->mysqlconn= mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->bd) or die ("ERROR DE CONEXION:".mysqli_error($mysqlconn));
		$mysqlconn=$this->mysqlconn;
		return $this->mysqlconn;
	if ($mysqlconn){
		echo "conectado";
		}
		}
	}


?>
