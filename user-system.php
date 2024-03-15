<?php

require __DIR__ . "/source/autoload.php";

//phpinfo();
use Source\Core\Connect;
use Source\Models\User;

$user = new User();

$user->login("fabio3268@gmail.com");