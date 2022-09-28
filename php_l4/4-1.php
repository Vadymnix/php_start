<?php
$arrayNumber = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$isEvenOrOdd = function($n) {
    return $n % 2 ? "$n - нечетное" : "$n - четное";
};

print_r(array_map($isEvenOrOdd, $arrayNumber));

