<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;



$value = Yaml::parseFile('./demo.yml');

print_r($value['bill-to']['address']['lines']);
echo '<br>';
print_r($value['comments']);

?>