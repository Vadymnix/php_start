<?php
$students = [
    'ИТ20' => [
        'Иванов Петр' => 5,
        'Киряллов Кирилл' => 1,
        'Иванов Василий' => 5,
        'Петров Иван' => 3,
        'Петров Кирилл' => 2,
        'Иванов Иван' => 5,
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Иванов Иван' => 5,
        'Васечкин Иван' => 5,
        'Залужный Владимир' => 4,
        'Карякин Петр' => 2,
    ],
    'УУ10' => [
        'Анто Антон' => 4,
        'Ванька Иван' => 1,
        'Васька Иван' => 2,
        'Макаревич Андрей' => 4,
        'Карякин Петр' => 2,
    ]
];
$maxAverageValue = [];
$listBye = [];

foreach($students as $nameGroup => $group) {
    $currentValue = 0;
    $countStudent = count($group);

    foreach ($group as $nameStudent => $value) {
        $currentValue += $value;
        if($value < 3) {
            $listBye[$nameGroup][$nameStudent] = $value;
        }
    }

    $averageValue = $currentValue/$countStudent;
    if(empty($maxAverageValue)) {
        $maxAverageValue[$nameGroup] = $averageValue;
    } else {
        $currentKey = key($maxAverageValue);
        if ($averageValue  > $maxAverageValue[$currentKey]) {
                unset($maxAverageValue[$currentKey]);
                $maxAverageValue[$nameGroup] = $averageValue ;
        }
    }
}

echo "Average value: \n";
print_r($maxAverageValue);
echo "Bye list of students: \n";
print_r($listBye);
