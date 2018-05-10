<?php

class Destino{

	private $destID;
	private $destNombre;
	private $regID;
	private $destPrecio;
	private $destAsientos;
	private $destDisponibles;
	private $destActivo;

	public function __construct(){

	}

	/**
	*	Lista los destinos
	*	@return PDO::FETCH_ASSOC
	*/

	public function listarDestinos(){

		$link = Conexion::conectar();
		$sql = "SELECT destID, destNombre, regNombre, destPrecio, destAsientos, destDisponibles, destActivo FROM destinos, regiones WHERE destinos.regID = regiones.regID";

		$stmt = $link->prepare($sql);
		$stmt->execute();

		$listado = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $listado;
	}

	public function verDestinoPorID($id){

		$link = Conexion::conectar();
		$sql = "SELECT destID, destNombre, regNombre, destPrecio, destAsientos, destDisponibles, destActivo FROM destinos, regiones WHERE destinos.regID = regiones.regID AND destID = " . $id;

		$stmt = $link->prepare($sql);
		$stmt->execute();

		$destino = $stmt->fetch(PDO::FETCH_ASSOC);

		return $destino;
	}

    public function modificarDestino($id){

        $nombre = $_POST['destNombre'];
        $region = $_POST['regID'];
        $precio = $_POST['destPrecio'];
        $asientos = $_POST['destAsientos'];
        $disponibles = $_POST['destDisponibles'];

        $link = Conexion::conectar();
        $sql = "UPDATE destinos SET destNombre =" . $nombre . ", regID =" . $region . ", destPrecio =" . $precio . ", destAsientos =". $asientos . ", destDisponibles =" . $disponibles . " WHERE destID =" . $id;

        $stmt = $link->prepare($sql);
        
        return $stmt->execute();

    }

    /**
     * @return mixed
     */
    public function getDestID()
    {
    	return $this->destID;
    }

    /**
     * @param mixed $destID
     *
     * @return self
     */
    public function setDestID($destID)
    {
    	$this->destID = $destID;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getDestNombre()
    {
    	return $this->destNombre;
    }

    /**
     * @param mixed $destNombre
     *
     * @return self
     */
    public function setDestNombre($destNombre)
    {
    	$this->destNombre = $destNombre;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getRegID()
    {
    	return $this->regID;
    }

    /**
     * @param mixed $regID
     *
     * @return self
     */
    public function setRegID($regID)
    {
    	$this->regID = $regID;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getDestPrecio()
    {
    	return $this->destPrecio;
    }

    /**
     * @param mixed $destPrecio
     *
     * @return self
     */
    public function setDestPrecio($destPrecio)
    {
    	$this->destPrecio = $destPrecio;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getDestAsientos()
    {
    	return $this->destAsientos;
    }

    /**
     * @param mixed $destAsientos
     *
     * @return self
     */
    public function setDestAsientos($destAsientos)
    {
    	$this->destAsientos = $destAsientos;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getDestDisponibles()
    {
    	return $this->destDisponibles;
    }

    /**
     * @param mixed $destDisponibles
     *
     * @return self
     */
    public function setDestDisponibles($destDisponibles)
    {
    	$this->destDisponibles = $destDisponibles;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getDestActivo()
    {
    	return $this->destActivo;
    }

    /**
     * @param mixed $destActivo
     *
     * @return self
     */
    public function setDestActivo($destActivo)
    {
    	$this->destActivo = $destActivo;

    	return $this;
    }
}