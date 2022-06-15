<?php

//require __DIR__ . "/source/Clients/Client.php";
require __DIR__ . "/source/autoload.php";

$client = new \Source\Clients\Client("Fábio","fabio@gmail");
$saving = new \Source\Accounts\Saving(
    "3257832",
    "1000",
    "10"
);

$client->addSaving($saving);

var_dump($client);

$product = new \Source\Products\Product();

//var_dump($client,$account,$product);