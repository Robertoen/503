<?php

$apostilas = simplexml_load_file('XML.xml');

$apostila = addAtribute('ano','2013');
print $apostilas->asXML();