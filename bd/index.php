<?php

require __DIR__ . "/../source/autoload.php";
require __DIR__ . "/../source/Boot/Config.php";

use Source\Core\Connect;

$stmt = Connect::getInstance()->query("SELECT * FROM users");
$stmt->execute();
while ($row = $stmt->fetch()){
    var_dump($row);
}
