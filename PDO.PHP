<?php

$pdo = new PDO("mysql:host=localhost;dbname=nargile", "root", "root");
try {
    $pdo;
} catch (PDOException $e) {
    echo $e;
}
