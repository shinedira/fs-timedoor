<?php

$numbers = ['one', 'two', 'three', 'six'];

// foreach ($numbers as $number) {
//     if ($number == 'three') {
//         break;
//     }

//     echo "the number is {$number} \n";
// }

// foreach ($numbers as $number) {
//     if ($number == 'two') {
//         echo "continue at {$number} \n";
//         continue;
//     }

//     echo "the number is {$number} \n";
// }

$customers = [
    [
        "name" => "c 1",
        "age" => 20
    ],
    [
        "name" => "c 2",
        "age" => 30
    ],
    [
        "name" => "c 3",
        "age" => 40
    ],
    [
        "name" => "c 4",
        "age" => 50
    ],
    
];

$result = [];

foreach ($customers as $customer) {
    if ($customer['age'] == 30) {
        continue;
    }

    $result[] = $customer;
}

print_r($result);