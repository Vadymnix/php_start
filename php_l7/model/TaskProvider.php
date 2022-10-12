<?php
require_once ("Task.php");

class TaskProvider {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getUndoneList():?array {
        $sql = 'SELECT id, description, isDone 
                FROM tasks
                WHERE isDone = 0';
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $arrTasks = [];
        while ($task = $statement->fetch()) {
            $arrTasks[] = new Task($task['id'], $task['description'], (bool)$task['isDone']);
        }

        return  $arrTasks?:null;
    }

    public function addTask(string $text):void {
        try {
            $statement = $this->pdo->prepare('INSERT INTO tasks (description) values(:desc)');

            if(!$statement){
                echo "error prepare";
            }

            if(!$statement->execute([$text])) {
                echo "error exec";
            }
        }catch (Exception $err) {
            var_dump($err);
        }
    }

    public function updateTask(int $id): self {
        $sql = 'UPDATE tasks
                SET isDone = 1 
                WHERE id = :id';

        $statement = $this->pdo->prepare($sql);
        $statement->execute(['id' => $id]);

        return $this;
    }
}