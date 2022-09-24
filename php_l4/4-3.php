<?php
$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function findItem(string $stringFind, $arrayBox):bool {
    if(!is_array($arrayBox) ) {
        if ($stringFind === $arrayBox) {
            echo "$arrayBox is FOUND !!!!!!!!!!!!!!\n";
            return true;
        } else {
            return false;
        }
    }

    foreach ($arrayBox as $item) {
        if( findItem($stringFind, $item) ) return true;
    }

    return false;
}

findItem('Ключ', $box);