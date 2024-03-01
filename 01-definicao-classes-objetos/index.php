<?php

require __DIR__ . "/../source/User.php";

$user = new User();
$user->setName("Fábio");
$user->setEmail("fabiosantos@ifsul.edu.br");
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";

$user = new User("Débora", "debora@gmail.com");
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";

$user = new User(
    "José da Silva",
    "jose@gmail.com"
);
echo "<div>Meu nome é {$user->getName()}</div>";
echo "<div>Meu e-mail é {$user->getEmail()}</div>";
echo "<div>Minha Senha é {$user->getPassword()}</div>";