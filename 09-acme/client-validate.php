<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$client = new \Source\Clients\Client();
var_dump($client);
$client->validate("dante@ifsul.edu.br","12345678");

