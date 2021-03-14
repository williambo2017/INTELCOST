<?php
class Conexion
{
	private $mysqli;
	private $resultado;
	public function abrir()
	{
		$this->mysqli = new mysqli("localhost:3306", "root", null, "intelcost_bienes");
		$this->mysqli->set_charset("utf8");
	}
	public function ultimoId()
	{
		return $this->mysqli->insert_id;
	}
	public function ejecutar($sentencia)
	{
		$this->resultado = $this->mysqli->query($sentencia);
		//echo $sentencia . "<br>";
	}
	public function cerrar()
	{
		$this->mysqli->close();
	}
	public function numFilas()
	{
		if ($this->resultado != null) {
			return $this->resultado->num_rows;
		} else {
			return 0;
		}
	}
	public function extraer()
	{
		return $this->resultado->fetch_row();
	}
	public function sentenciaEjecutada()
	{
		if ($this->resultado === TRUE) {
			return true;
		} else {
			return false;
		}
	}
}
