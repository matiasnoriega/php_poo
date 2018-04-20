<?php

class Persona{

	private $nombre;
	private $apellido;
	
	public function verDatos(){
		echo 'Nombre: ', $this->nombre;
		echo '<br>';
		echo 'Apellido: ', $this->apellido;
	}
	
		/* Con la funcion en private arroja un error de accesibilidad porque ESTA AFUERA DE LA DECLARACION DE LA CLASE
		private function verDatos(){
			echo 'Test.';
		}*/



    /**
     * @return mixed
     */
    public function getNombre()
    {
    	return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
    	$this->nombre = $nombre;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
    	return $this->apellido;
    }

    /**
     * @param mixed $apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
    	$this->apellido = $apellido;

    	return $this;
    }
}

$objetoPersona = new Persona();
$objetoPersona->setNombre("Matias");
$objetoPersona->setApellido("Noriega");
$objetoPersona->verDatos();