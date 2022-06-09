<?php

require __DIR__ . "/source/autoload.php";

$user = new \Source\General\User(
    "Fábio",
    "fabio@gmail.com"
);

$doctor = new \Source\Hospital\Doctor(
    "Dréuzio Varela",
    "drauzio@gmail",
    "35345",
    "Oncologista"
);

$patient = new \Source\Records\Patient(
    "José",
    "jose@gmail.com",
    "Dados do Prontuário",
    "12/12/1980"
);

var_dump($user,$doctor, $patient);

