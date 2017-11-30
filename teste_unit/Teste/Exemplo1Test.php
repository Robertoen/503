<?php 

use PHPUnit\Framework\TestCase;

class Exemplo1Test extends TestCase {

	public function testSoma(){
		$soma = 2 + 3;
		$this->assertSame(4, $soma);
	}

	public function testTrue(){
		$verdadeiro  = true;

		$this->assertTrue($verdadeiro);
	}
	public function testFalse(){
		$verdadeiro  = false;

		$this->assertFalse($verdadeiro);
	}
	public function testCount(){
		$array = [0,1,2];

		$this->assertCount(5, $array);
	}
	public function testEmpty(){
		$vazio = null;

		$this->assertEmpty($vazio);
	}
	public function testNull(){
		$vazio = "";

		$this->assertNull($vazio);
	}
	public function testEqual(){
		$vlr1 = 1;
		$vlr2 = 1;

		$this->assertEquals($vlr1 , $vlr2);
	}
}
?>