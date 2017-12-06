<?php

class Estoque{

	private $itens = [];

	public function addItem($item, $quantidade){
		
		if(isset($this->itens[$item])){
			
			$this->itens[$item] += $quantidade;
			
		}else{
			$this->itens[$item] = $quantidade;
		}
	}

	public function getItem($item){
		if (isset($this->itens[$item])){
			return $this->itens[$item];
		}
		
		throw new InvalidArgumentException("Item nao existe no estoque");
	}

	public function removeItem($item, $quantidade){
		if(isset($this->itens[$item])){
			$this->itens[$item] -= $quantidade;
		}
		return $this;
	}
}