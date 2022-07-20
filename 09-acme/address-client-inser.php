<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$address = new \Source\Clients\Address(
    "Santa Bárbara",
    "1200",
    "Não Tem"
);

$client = new \Source\Clients\Client(
    "João Antônio da Silva",
    "joaoantonio@ifsul.edu.br",
    "87654321",
    "1976-02-12",
    $address,
);

$client->insert();

var_dump($client);