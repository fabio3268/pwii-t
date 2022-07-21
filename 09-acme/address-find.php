<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$address = new \Source\Clients\Address();

$address->findByIdClient(988);