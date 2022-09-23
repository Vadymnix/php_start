<?php
for($i = 0; $i < 10; $i++) {
    $arrFirst [] = mt_rand(1, 9);
    $arrSecond [] = mt_rand(1, 9);
    $result [] = $arrFirst[$i] * $arrSecond[$i];
}

echo "first array: ".implode(',', $arrFirst)."\n";
echo "second array: ".implode(',', $arrSecond)."\n";
echo "RESULT ARRAY: \n";
print_r($result);

