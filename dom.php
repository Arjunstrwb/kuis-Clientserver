<?php
$xml =  new DOMDocument('1.0','UTF-8');
$rootElement = $xml->createElement('DataMahasiswa');
$datmhsAtribut = $xml->createAttribute('nama');
$datmhsAtribut->value='Rizky sidiq';
$rootElement->appendChild($datmhsAtribut);
$dataMhs=$xml->appendChild($rootElement);
$mhsElement = $xml->createElement('DataMahasiswa');
$elNPM = $xml->createElement('NPM','1707051001');
$elnama = $xml->createElement('nama','Rizky sidiq');
$rootElement->appendChild($mhsElement);
$mhsElement->appendChild($elNPM);
$mhsElement->appendChild($elnama);   
echo $xml->saveXML();