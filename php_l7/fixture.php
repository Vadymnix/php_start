<?php
$pdo = require_once ("db.php");

$pdo->exec('CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(150),
    username VARCHAR(100)  NOT NULL,
    password VARCHAR(100) NOT NULL 
)');

