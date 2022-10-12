<?php
$pdo = require_once ('db.php');
require_once ('model/User.php');
//var_dump($pdo);
//$statement = $pdo->prepare('INSERT INTO tasks (description) values(?)');
//var_dump($statement);
//$statement->execute(["Task TEST __1"]);

$user = new User('vasyaname', 'name');
var_dump($user);

