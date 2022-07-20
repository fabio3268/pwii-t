<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$address = new \Source\Clients\Address(
    "Rua Medianeira",
    "12121",
    "ap 1010",
    9
);

$address->insert();