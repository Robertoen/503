<?php

$apostilas = simplexml_load_file('XML.xml');

$apostilas = $apostilas->apostila[0]->attributes();

print "<pre>";
print_r($apostilas);

