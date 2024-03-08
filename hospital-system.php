<?php

require __DIR__ . "/source/autoload.php";

echo "<h1>Sistema HOSPITAL</h1>";

use Source\Models\Hospital\Patient;

$patient = new Patient(
    12,
    "Fábio",
    "fabio@gmail.com",
    "2345rtgfdr",
    "12/02/1976",
    "Está curado!"
);
var_dump($patient);

