<?php

$apostilas = simplexml_load_file('XML.xml');

print "<pre>";
print_r($apostilas->apostila[2]->titulo);

//alterar
$apostilas->apostila[2]->titulo = "PHP Enterprise Roberto";

print $apostilas->asXML('XML.xml');