<?php
require_once ("Task.php");

class TaskProvider {
    private array $listTask = [];

    function getUndoneList():?array {
        return [];
    }

    function addTask(Task $task):void {
        $this->listTask[] = $task;
    }
}