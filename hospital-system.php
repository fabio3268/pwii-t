<?php

require __DIR__ . "/source/autoload.php";

echo "<h1>Sistema HOSPITAL</h1>";

use Source\Models\Hospital\Patient;
use Source\Models\Hospital\Doctor;

$patient = new Patient(
    12,
    "Fábio",
    "fabio@gmail.com",
    "2345rtgfdr",
    "12/02/1976",
    "Está curado!"
);
var_dump($patient);
var_dump($patient->getName());

$doctor = new Doctor(
    "24",
    "Dráuzio Varela",
    "drauzio@gmail.com",
    "3r4fdc3w",
    "435345",
    "Cardiologista"
);

var_dump($doctor);
