<?php
echo __DIR__;
require __DIR__ . "/../source/User.php";
$user = new User();
$user->setName("Fábio");
$user->setEmail("fabiosantos@ifsul.edu.br");
var_dump($user);
echo "Seu nome é: {$user->getName()} - seu e-mail é: {$user->getEmail()}";
$user02 = new User("Fábio","fabio@gmail.com");
var_dump($user02);
