<?php

class Region{

	private $regID;
	private $regNombre;

	public function __construct(){

	}


	/**
	*	método para listar regiones.
	*	@return PDO::FETCH_ASSOC
	*/

	public function listarRegiones(){

		$link = Conexion::conectar();
		$sql = "SELECT regID, regNombre FROM regiones";
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$listado = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $listado;

	}

	public function verRegionPorID($id){

		$link = Conexion::conectar();
		$sql = "SELECT regID, regNombre FROM regiones WHERE regID = " . $id;
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$region = $stmt->fetch(PDO::FETCH_ASSOC);

		return $region;
	}

	public function modificarRegion($id){

		$nombre = $_POST['regNombre'];
		$link = Conexion::conectar();
		$sql = "UPDATE regiones SET regNombre = '" . $nombre . "' WHERE regID = " . $id;

		$stmt = $link->prepare($sql);

		return $stmt->execute();
	}

	//Getters & Setters
    public function getRegID()
    {
    	return $this->regID;
    }

    public function setRegID($regID)
    {
    	$this->regID = $regID;

    	return $this;
    }

    public function getRegNombre()
    {
    	return $this->regNombre;
    }

    public function setRegNombre($regNombre)
    {
    	$this->regNombre = $regNombre;

    	return $this;
    }
}