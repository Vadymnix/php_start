<?php
require_once ('model/TaskProvider.php');

if( isset($_POST['action']) && $_POST['action'] === 'addtask') {
     if (isset($_POST['task']) && !empty($_POST['task'])) {
         $provider = new TaskProvider();
         $provider->addTask($_POST['task']);
//         echo "<br>--------------<br>";
     }
}
require_once ("view/task.php");