<?php

$apostilas = simplexml_load_file('XML.xml');

//REMOVENDO
unset($apostilas->apostila[0]_>topicos);

print $apostilas->asXML();