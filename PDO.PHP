<?php

$pdo = new PDO("mysql:host=localhost;dbname=nargile", "root", "root");
try {
    $pdo;
} catch (PDOException $e) {
    echo $e;
}

//простая выборка. Имя самой БД перед таблицей через точку!
 $result =$pdo->query("SELECT * FROM nargile.table");
  foreach ($result as $r) {
      echo $r['nameTable'];
  }
