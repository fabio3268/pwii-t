<?php

require __DIR__ . "/source/Models/Faq/Question.php";

echo "<h1>Olá, Sistema de FAQ</h1>";

$question = new Question();

var_dump($question);