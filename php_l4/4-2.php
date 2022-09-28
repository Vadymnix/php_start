<?php
declare(strict_types=1);
$arrayNumber = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function work(array $arg): array {
    if (empty($arg)) throw new InvalidArgumentException("\nArray is empty\n");

    $size = count($arg);
    $max = $arg[0];
    $min = $arg[0];
    $sum = 0;

    for($i = 0; $i < $size; $i++) {
        if (!is_int($arg[$i])) throw new InvalidArgumentException("\nArgument not number\n");
        if($arg[$i] > $max) $max = $arg[$i];
        if ($arg[$i] < $min) $min = $arg[$i];

        $sum += $arg[$i];
    }
    return [$min, $max, $sum/$size];
}

try{
    print_r(work($arrayNumber));
}catch (InvalidArgumentException $error) {
    echo "ERROR in function work() -- " . $error->getMessage();
}
