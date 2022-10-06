<?php
require_once ("Task.php");

class TaskProvider {

    function getUndoneList():?array {
        $newArr = [];
        foreach ($_SESSION['tasklist'] as $task) {
            var_dump($task);
            echo "<br>----------------------------<br>";
            //echo $task->isDone();
            echo "<br>----------------------------<br>";
//            if(!$task->isDone()) {
//                echo "undone";
//                $newArr[] = $task;
//            }
        }

        return $_SESSION['tasklist'] ?? null;
    }

    function addTask(Task $task):void {
        $_SESSION['tasklist'][] = $task;
    }
}