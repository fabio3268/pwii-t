<?php

require __DIR__ . "/source/autoload.php";

//phpinfo();
use Source\Core\Connect;
use Source\Models\Faq\Question;
use Source\Models\Faq\Type;

echo "<h1>Olá, Sistema de FAQ</h1>";



$questioInsert = new Question(
    NULL,
    2,
    "Segunda Questão",
    "Segunda Resposta"
);

var_dump($questioInsert);

$questioInsert->insert();

/*
$question = new Question();
$type = new Type();
$listQuestions = $question->selectAll();
var_dump(json_encode($listQuestions));

var_dump($question);
var_dump($type);

$conn = Connect::getInstance();
var_dump($conn);
$query = "SELECT * FROM questions";
$result = $conn->query($query)->fetchAll();
var_dump($result);

*/

