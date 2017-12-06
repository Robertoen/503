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

	$curl = curl_init();
	
	curl_setopt($curl, CURLOPT_URL, $url);
	
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$retorno = curl_exec($curl);

	curl_close($curl);

	$endereco = json_decode($retorno);

	print "Endereço: $endereco->logradouro <br>";
	print "Bairro: $endereco->bairro <br>";
	print "Localidade: $endereco->localidade <br>";
	print "UF: $endereco->uf <br>";

}

?>