<?php
$flagWhile = true;
do {
    $answer = readLine("Начало Второй Мировой войны? 1933, 1939, 1941: \n");
    switch ($answer) {
        case 1941:
        case 1933:
            echo "Год $answer неправильный\n";
            $flagWhile = false;
            break;
        case 1939: echo "Правильный ответ!!! 1939 год!!!\n";
            $flagWhile = false;
            break;
        default: echo "????????\n";
    }
} while ($flagWhile);


