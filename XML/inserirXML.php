<?php

$apostilas = simplexml_load_file('XML.xml');

//ADD uma nova apostila
$nova_apostila = $apostilas->addChild('apostila');
$nova_apostila->addChild('titulo','Criando um Titulo novo');

$topicos = $nova_apostila->addChild('apostila');
$topicos->addChild('titulo','Criando um Topico novo');
$topicos->addChild('titulo','Criando um Topico novo');

print $apostilas->asXML('XML.xml');
