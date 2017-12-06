<!DOCTYPE html>
<html>
<head>

	<title>BUSCA CEP</title>

</head>
<body>
	
	<form action="#" method="POST">
		CEP: <input type="text" name="cep">
		<input type="submit" value="Buscar">
	</form>


</body>
</html>


<?php

if (isset($_POST['cep'])){

	/*$cep = "02471210";*/
	$cep = $_POST['cep'];

	$url = "http://viacep.com.br/ws/{$cep}/json/";

	$retorno = file_get_contents($url);
	
	$endereco = json_decode($retorno);

	print "Endereço: $endereco->logradouro <br>";
	print "Bairro: $endereco->bairro <br>";
	print "Localidade: $endereco->localidade <br>";
	print "UF: $endereco->uf <br>";

}
?>