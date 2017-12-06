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
foreach ($result as $key => $value) {
	$alunos[$key] = [
	"nome" => $value["nome"],
	"dt_nasc" => new DateTime($value["dt_nasc"])
	];
}


print "ALUNO MAIS NOVO";
$novo = $alunos[0];
for ($i=0; $i < count($alunos); $i++) { 
	if($novo['dt_nasc'] < $alunos[$i]['dt_nasc']){
		$novo = $alunos[$i];
	}
}

$intervalo = $novo['dt_nasc']/*->diff($velho['dt_nasc'])*/;
$intervalo->format('d-m-Y');