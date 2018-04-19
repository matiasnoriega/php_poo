<?php

	class Persona{

		public $nombre;
		public $apellido;

		public function verDatos(){
			echo 'Test.';
		}

	}

	$objetoPersona = new Persona();
	$objetoPersona->verDatos();