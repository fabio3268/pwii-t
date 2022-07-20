<?php

require __DIR__ . "/source/autoload.php";
require __DIR__ . "/source/Boot/config.php";

$client = new \Source\Clients\Client();
var_dump($client);
if($client->validate("dante@ifsul.edu.br","12345678")){
    echo "Login OK";
} else {
    echo "Login não OK!";
}
var_dump($client);

