<?php
//$pdo = require_once ('db.php'); //Почему не работает это подключение?!!!
require_once ('model/TaskProvider.php');
$pdo = new PDO(
    'sqlite:database.db',
    null,
    null,
    [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC],
);

$taskProvider = new TaskProvider($pdo);

if(isset($_POST['action'])) {
    if ($_POST['action'] === 'addtask') {
        if (isset($_POST['task']) && !empty($_POST['task'])) {
            $taskProvider->addTask($_POST['task']);
        }
    }
}

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'delete') {
        $taskProvider->updateTask($_GET['id']);
    }
}
require_once ("view/task.php");