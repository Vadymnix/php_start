<?php
$name = readLine('What you name?');
$arrTasks = [];

for($i = 0; $i < 3; $i++) {
    $task = readLine('What do you do? ');
    $hours = readLine('How many time needs on this task? ');
    $arrTask[$task] = $hours;
}
var_dump($arrTask);
echo "$name, you have 3 tasks today\n";
foreach ($arrTask as $key => $value) {
    echo "- $key ($value h)\n";
}
echo 'bb';

