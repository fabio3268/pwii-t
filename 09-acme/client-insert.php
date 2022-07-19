<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";


// Cria um endereço qualquer
$address = new \Source\Clients\Address(
    "Rua Z",
    "324"
);

var_dump($address);
// instancia um objeto Cliente
$client = new \Source\Clients\Client(
    "Dante",
    "dante@ifsul.edu.br",
    "234567",
    "1980-02-12",
    $address,
);

var_dump($client);
// Evoca o método insert para que o registro seja inluido
$client->insert();

//$client->findById(3);




