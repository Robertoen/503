<?php 

$user 	= "robertobd";
$pass 	= "123";
$dsn  	= "pgsql:host=localhost; dbname=dexterescola;";

$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM tb_alunos ORDER BY id";

$prepare = $pdo->query($sql);
$prepare->execute();

$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

print "<pre>";
var_dump($result[0]); 
