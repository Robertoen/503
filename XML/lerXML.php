<?php 

$xml = <<<'XML'
<?xml version="1.0" encoding="UTF-8"?>
<apostilas>
    <apostila versao="1.0">
        <titulo>Desenvolvimento Web com PHP</titulo>
        <topicos>
            <topico>Configuração de Ambiente</topico>
            <topico>Fundamentos da Linguagem PHP</topico>
        </topicos>
    </apostila>
    <apostila versao="1.0">
        <titulo>Desenvolvimento Orientado a Objetos com PHP</titulo>
        <topicos>
            <topico>PDO: PHP Data Object</topico>
            <topico>SPL: Standard PHP Library</topico>
        </topicos>
    </apostila>
    <apostila versao="2.0">
        <titulo>PHP Enterpris</titulo>
        <topicos>
            <topico>XML</topico>
            <topico>Traits</topico>
        </topicos>
    </apostila>
</apostilas>
XML;

$apostilas = new SimpleXMLElement($xml);

$apostilas =  new SimpleXMLElement('XML.xml', null, true);

$apostilas = simplexml_load_file('XML.xml');

print "<pre>";
print_r($apostilas);