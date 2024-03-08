<?php

require __DIR__ . "/source/autoload.php";

use Source\Models\School\Student;
use Source\Models\School\ClassRoom;

$classRoom = new ClassRoom();

$student = new Student();

var_dump($classRoom, $student);
