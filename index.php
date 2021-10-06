<?php
require_once ('./vendor/autoload.php');

use Symfony\Component\Yaml\Yaml;

$value = Yaml::parseFile('./assets/yaml/demo.yml');

// $loader =new \Twig\Loader\FilesystemLoader("/template");

// $twig = new \Twig\Environment($loader);

echo $value['welcome'];

// echo $twig->render('index.html.twig', array(
//   'msg' => $value['welcome'],
// ));


?>