<?php


class Aluno{

	private $user 	= "robertobd";
	private $pass 	= "123";
	private $dsn  	= "pgsql:host=localhost; dbname=dexterescola;";

	public function __construct(){
		$this->con = new PDO($this->dsn, $this->user, $this->pass);
	}

	public function all(){
		
		$prepare = $this->con->query("SELECT * FROM tb_alunos ORDER BY id");
		$prepare->execute();
		$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function find($id){
		$sql = "SELECT * FROM tb_alunos WHERE id = :id";
		$stmt = $this->con->prepare($sql);
		$stmt->bindParam(":id", $id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}


}