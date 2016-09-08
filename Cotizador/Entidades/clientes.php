<?php

class clientes
{
	public $Id;
	public $nombre;
	public $Empresa;
	public $Cargo;
	public $Correo;
	public $Telefono;
	public $Direccion;
	public $Interes;

	/*ID*/
	function get_id()
	{
		return $this->Id;
	}

	function set_id($Id)
	{
		$this->Id = $Id;
	}

	/*nombre*/
	function get_nombre()
	{
		return $this->nombre;
	}

	function set_nombre($nombre)
	{
		$this->nombre = $nombre;
	}

	/*Telefono*/
	function get_Telefono()
	{
		return $this->Telefono;
	}

	function set_Telefono($Telefono)
	{
		$this->Telefono = $Telefono;
	}

	/*Correo*/
	function get_Correo()
	{
		return $this->Correo;
	}

	function set_Correo($Correo)
	{
		$this->Correo = $Correo;
	}
	/*Empresa_producto*/
	function get_Empresa()
	{
		return $this->Empresa;
	}

	function set_Empresa($Empresa)
	{
		$this->Empresa = $Empresa;
	}
	/*Cargo*/
	function get_Cargo()
	{
		return $this->Cargo;
	}

	function set_Cargo($Cargo)
	{
		$this->Cargo = $Cargo;
	}
	
	/*Direccion*/
	function get_Direccion()
	{
		return $this->Direccion;
	}

	function set_Direccion($Direccion)
	{
		$this->Direccion = $Direccion;
	}

	/*Interes*/
	function get_Interes()
	{
		return $this->Interes;
	}

	function set_Interes($Interes)
	{
		$this->Interes = $Interes;
	}

}
?>