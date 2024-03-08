<?php

//use Source\Models\User;

require __DIR__ . "/../source/Models/User.php";

$user = new User();
$user->setName("Fábio");
$user->setEmail("fabiosantos@ifsul.edu.br");
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";

$user = new User(1, "Débora", "debora@gmail.com", "3435435");
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";

$user = new User(
    "José da Silva",
    "jose@gmail.com"
);
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";
echo "<div>Minha Senha é {$user->getPassword()}</div>";