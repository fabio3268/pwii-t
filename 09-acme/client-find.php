<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$client = new \Source\Clients\Client();

//var_dump($client);
$client->findById(1000);
//var_dump($client);

$client02 = new \Source\Clients\Client();
var_dump($client02);
$client02->findByName("Antônio");
var_dump($client02);