<?php

require __DIR__ . "/source/autoload.php";

$address = new \Source\Clients\Address(
    "Rua A",
    "1212"
);

$client = new \Source\Clients\Client(
    "Fábio Santos",
    "fabiosantos@ifsul.edu.br",
    "1233456",
    "12/02/1976",
    $address
);

$saving01 = new \Source\Accounts\Savings(
    "6456456",
    "1000",
    "05"
);

$saving02 = new \Source\Accounts\Savings(
    "5464654",
    "5000",
    "10"
);

$checking01 = new \Source\Accounts\Checking(
    "64564",
    "60000",
    "1000",
    "10"
);

$checking02 = new \Source\Accounts\Checking(
    "654564",
    "50000",
    "500",
    "10"
);

$client->addSaving($saving01);
$client->addSaving($saving02);
$client->addChecking($checking01);
$client->addChecking($checking02);
var_dump($client);
