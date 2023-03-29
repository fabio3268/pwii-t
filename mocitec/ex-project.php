<?php

require __DIR__ . "/../source/Project.php";

$project = new Project(
    "Meu Projeto",
    "Resumo do meu projeto",
    "Texto do meu projeto..."
);

var_dump($project);

