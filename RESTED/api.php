<?php

require_once "alunos.php";

$alunos = new Aluno();

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
	case 'GET':
		/*$result = $alunos->all();
		print json_encode($result);*/

		$id = isset($_GET['id']) ? $_GET['id'] : null;

		if($id){
			$result = $alunos->find($id);
		}else{
			$result = $alunos->all();
		}

	break;

	case 'POST':
	print "POST";
	break;
	
	case 'PUT':
	print "PUT";
	break;
	
	case 'DELETE':
	print "GET";
	break;
	
	default:
	print "Method invalido";
	break;
}