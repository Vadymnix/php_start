<?php
class TaskService {
    public static function addComment(User $author, Task $task, string $text):void {
        $comment = new Comment($author, $task, $text);
        $task->addComment($comment);
    }
}