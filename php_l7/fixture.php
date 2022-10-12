<?php
require_once 'model/UserProvider.php';
$pdo = require_once ("db.php");

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100)  NOT NULL,
    password VARCHAR(100) NOT NULL 
)');

$pdo->exec(
    'CREATE TABLE tasks (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    description VARCHAR(200) NOT NULL ,
    isDone TINYINT NOT NULL DEFAULT 0
)');

$user = new User('geekbrains');
$user->setName('GeekBrains PHP');

$userProvider = new UserProvider($pdo);
$userProvider->registerUser($user, '123');
