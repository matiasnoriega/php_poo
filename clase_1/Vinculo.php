<?php

class Vinculo{

	private $url;
	private $texto;

	public function crearLink(){

		$link = "<a href='".$this->getUrl()."'>";
		$link .= $this->getTexto();
		$link .= "</a>";

		return $link;
	}


	
    /**
     * @return mixed
     */
    public function getUrl()
    {
    	return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
    	$this->url = $url;

    	return $this;
    }

    /**
     * @return mixed
     */
    public function getTexto()
    {
    	return $this->texto;
    }

    /**
     * @param mixed $texto
     *
     * @return self
     */
    public function setTexto($texto)
    {
    	$this->texto = $texto;

    	return $this;
    }
}