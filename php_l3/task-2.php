<?php
$wishes = ['счастья', 'карьерного роста', 'веселья', 'терпения', 'здоровья', 'воображения', 'бизнеса'];
$epithets = ['большого', 'огромного', 'сумашедшего', 'бесконечного', 'космического', 'отличного', 'прекрасного'];
$name = readLine('Как твое имя дорогой юзверь? ');

for($i = 0; $i < 3; $i++) {
    $result [$i] [] = $epithets[array_rand($epithets)];
    $result [$i] [] = $wishes[array_rand($wishes)];
}
var_dump($result);

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю " .
    implode(' ', $result[0]) . ", " .
    implode(' ', $result[1]) . " и " . implode(' ', $result[2]) . "!\n";
