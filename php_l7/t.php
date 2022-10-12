<?php
$pdo = require_once ('db.php');
var_dump($pdo);
$statement = $pdo->prepare('INSERT INTO tasks (description) values(?)');
var_dump($statement);
$statement->execute(["Task TEST __1"]);
