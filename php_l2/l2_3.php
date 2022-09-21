<?php
$flagWhile = true;
do {
    $answer = readLine("Введите положительное число:\n ");
} while ( !is_int($answer) && $answer < 1);

if ($answer > 5) {
    $answer %= 8;
    if($answer > 4) {
        $answer = 9 - $answer + 1;
    }elseif ($answer === 0) {
        $answer = 2;
    }
}

switch ($answer) {
    case 1:
        echo "1 палец";
        break;
    case 2:
        echo "2 палец";
        break;
    case 3:
        echo "3 палец";
        break;
    case 4:
        echo "4 палец";
        break;
    case 5:
        echo "5 палец";
        break;
}
echo "\nGood Luck !!!";

