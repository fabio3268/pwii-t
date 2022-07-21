<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$address = new \Source\Clients\Address(
    "General Rondon",
    "1200",
    "ap 400",
    7
);

$address->insert();

var_dump($address);

//$client = new \Source\Clients\Client(
//    "Alberto",
//    "alberto@gmail.com",
//    "1234567",
//    "1980-10-10",
//    $address
//);
//
//var_dump($client);

//$client->insert();
