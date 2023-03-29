<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\Faq\Question;
use Source\Models\Faq\Type;
$question = new Question();
$type = new Type();
var_dump($question, $type);
