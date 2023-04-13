<?php
require __DIR__ . "/../source/autoload.php";

use Source\Models\Hospital\Doctor;
use Source\Models\Hospital\Patient;
use Source\Models\Address;

$address = new Address("Rua A", "111", "Ap. 202");
var_dump($address);

$doctor = new Doctor(
    "Dráuzio Varela",
    "drauzio@gmail.com",
    "123456",
    "54321",
    "Cardio",
    $address
);

var_dump($doctor);

$patient = new Patient(
    "Fábio",
    "fabio@gmail",
    'asdfgh',
    'Um prontiário',
    '12/02/1976',
    $address
);

var_dump($patient);
