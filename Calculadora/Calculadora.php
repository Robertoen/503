<?php

class Calculadora {

	private $vlr1;
	private $vlr2;
	
	public function __construct($vlr1, $vlr2){
		$this->vlr1 = $vlr1;
		$this->vlr2 = $vlr2;
	}

	public function getVlr1(){
		return $this->vlr1;
	}
	
	public function getVlr2(){
		return $this->vlr2;
	}

	public function getSoma(){
		return $this->getVlr1() + $this->getVlr2(); 
	}
	
	public function getSub(){
		return $this->getVlr1() - $this->getVlr2(); 
	}

}