<?php

try {
    // código monitorado pelo try
} catch (PDOException $exception){
    //var_dump($exception);
    echo "Erro ao conectar!";
}
finally {
    echo "<p>Execução Terminou!</p>";
}

echo "---------------";

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=bd-inf-3at",
        "root",
        "",
        [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]
    );

    $stmt = $pdo->query("SELECT * FROM users");
    /*
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
    echo "<p>Nome: {$user["name"]}</p>";
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
    echo "<p>Nome: {$user["name"]}</p>";
    */

    while ($user = $stmt->fetch(PDO::FETCH_ASSOC)){ // mode do fetch PDO::FETCH_ASSOC
        var_dump($user);
        echo "<p>Nome: {$user['name']}</p>";
    }

} catch (PDOException $exception) {
    //echo "<p>Erro ao conectar!</p>";
    var_dump($exception);
    //echo "<p>{$exception->getMessage()}</p>";
    //header("Location:https://www.google.com/");
}