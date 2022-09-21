<?php
$name = readLine('What you name?');
$arrTasks = [];
$maxTask = 2;   //max tasks, you want more tasks? You need to change it
$totalTime = 0;

do {
    $anwser = readLine("How many tasks you have today? Max tasks must $maxTask: \n");
} while (!is_integer($anwser) && $anwser > 0 && $anwser < $maxTask);

for ($i = 0; $i < $anwser; $i++) {
    $task = readLine('What do you do? ');
    $hours = readLine('How many time needs on this task? ');
    $totalTime += $hours;
    $arrTask[$task] = $hours;
}

echo "$name, you have $anwser tasks today\n";
foreach ($arrTask as $key => $value) {
    echo "- $key ($value h)\n";
}
echo "--------------\n";
echo "TOTAL TIME: $totalTime\n";
echo "--------------\n";

