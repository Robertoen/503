<?php

require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase{

	private $estoque;

	public function testAddItem(){
		
		$item = "Blusa X";

		$estoque = new Estoque();
		$estoque->addItem($item, 10);
		$estoque->addItem($item, 10);
		$estoque->addItem($item, 10);

		$this->assertSame(30, $estoque->getItem($item));

	
	
	}

	public function setUp(){
		$this->estoque = new Estoque();
	}
	
	/**
	* @expectedException InvalidArgumentException
	* @expectedExceptionMessage Item nao existe no estoque
	*/
	public function testItemInvalido(){
		$this->estoque->getItem("Blusa Y");
	}

	public function testRemoveQuantidade(){
		$this->estoque->addItem("Blusa A", 10);
		
		$this->estoque->removeItem("Blusa A", 4);

		$this->assertSame(6, $this->estoque->getItem("Blusa A"));
	}
}