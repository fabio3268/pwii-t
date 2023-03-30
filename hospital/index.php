<?php
require __DIR__ . "/../source/autoload.php";
use Source\Models\Hospital\Doctor;
$doctor = new Doctor(
    "Fábio",
    "fabio@gmail.com",
    "12345",
    "we4567",
    "Cardiologista");
var_dump($doctor);
