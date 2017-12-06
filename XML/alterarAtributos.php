<?php

$apostilas = simplexml_load_file('XML.xml');

$apostilas = $apostila->apostila[0]->attributes();

$apostila->versao = "2.0";
print $apostilas->asXML();