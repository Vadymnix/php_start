<?php
require_once ("Task.php");
require_once ("User.php");
require_once ('Comment.php');
require_once ("TaskService.php");

$user = new User("Вася", "wqeq@dd.com", "male");
$task = new Task($user, "vyjujsfdsfds;j;lsdf буквы много", 2);

echo "USER\n-----------------------------------------\n";
var_dump($user);
echo "Task\n-----------------------------------------\n";
var_dump($task);

echo "\nDescription " . $task->getDescription() . " TIME: " .
    $task->getDateUpdated()->format("l d-m-Y h:i:s:u") . "\n";
$task->setDescription("YYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYYY\n");
echo "\nDescription " . $task->getDescription() . " TIME: " .
    $task->getDateUpdated()->format("l d-m-Y h:i:s:u") . "\n";

$commentString = "Hello, I am Vasya";

TaskService::addComment($user, $task, $commentString);
echo "Comments\n-----------------------------------------\n";
var_dump($task->getComments());