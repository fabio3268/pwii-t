<?php

require __DIR__ . "/source/Students/Apnp/Student.php";
require __DIR__ . "/source/Students/Presential/Student.php";

$apnp = new \Source\Students\Apnp\Student();
$presential = new \Source\Students\Presential\Student();

var_dump($apnp, $presential);
