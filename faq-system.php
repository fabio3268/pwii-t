<?php

//require __DIR__ . "/source/Models/Faq/Question.php";
//require __DIR__ . "/source/Models/Faq/Type.php";

require __DIR__ . "/source/autoload.php";

use Source\Models\Faq\Question;
use Source\Models\Faq\Type;

echo "<h1>Olá, Sistema de FAQ</h1>";

$question = new Question();
$type = new Type();

var_dump($question);
var_dump($type);
