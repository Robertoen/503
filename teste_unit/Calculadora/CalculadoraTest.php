<?php

require_once "Calculadora.php";

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase {

	public function setUp(){
		$this->calculadora = new Calculadora(2, 2);
	}

	public function testSoma(){
	$this->assertSame(4, $calculadora->getSoma());	
	
	}

	public function testSubtrair(){
	$this->assertSame(0, $calculadora->getSub());	
	
	}
}