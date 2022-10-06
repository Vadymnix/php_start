<?php
require_once ('model/TaskProvider.php');
if( isset($_POST['action']) && $_POST['action'] === 'addtask') {
     if (isset($_POST['task']) && !empty($_POST['task'])) {
         $provider = new TaskProvider();
         $newTask = new Task($_POST['task']);
         echo $newTask->getIsDone();
         $provider->addTask($newTask);
         //$provider->getUndoneList();
     }
}
require_once ("view/task.php");