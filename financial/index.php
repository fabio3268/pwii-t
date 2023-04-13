<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\Financial\Client;
use Source\Models\Financial\Savings;
use Source\Models\Address;

$address = new Address("Rua a ","123","casa");
var_dump($address);

$savings = new Savings("123456","300000","12/12");
$savings02 = new Savings("87654","400000","12/10");
var_dump($savings);

$client = new Client(
    "Fábio","fa@gmail.com","2345",$address,"20000"
);

var_dump($client);

$client->addSavings($savings);
$client->addSavings($savings02);
