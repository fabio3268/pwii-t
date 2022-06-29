<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$addres = new \Source\Clients\Address(
    "Rua A",
    "1212"
);
/*
$client = new \Source\Clients\Client(
    "Fábio Luís da Silva Santos",
    "fabiosantos@ifsul.edu",
    "12345678",
    "1976-02-12",
    $addres
);
$client->insert();
var_dump($client);
*/

$client = new \Source\Clients\Client();
//var_dump($client);
$client->findById(10);
var_dump($client);