<?php

require_once  'vendor/autoload.php';
use Tomjesus\DigitalCep\Search;

$busca = new Search;
echo 'Digite seu Cep:'."\n";
$resultado = $busca->getAddressFromZipcode( fgets(STDIN));

print_r($resultado);