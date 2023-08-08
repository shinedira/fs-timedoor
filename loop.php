<?php

// $brands = ['BMW', 'Toyota', 'Tesla', 'Honda'];

// for ($i=0; $i <= 2; $i++) { 
//     echo $brands[$i] . "\n";
// }



// for ($i=0; $i <= 10; $i++) { 
//     echo "[from for] value is " . $i . "\n";
// }

// $i = 0;

// while ($i <= 10) {
//     echo "[from while] value is " . $i . "\n";

//     $i++;
// }

// echo "*" . "\n";
// echo "**" . "\n";
// echo "***" . "\n";
// echo "****" . "\n";
// echo "*****" . "\n";

// for ($i=0; $i < 2; $i++) {
//     echo $i . "\n";
//     for ($j=0; $j <= $i; $j++) { 
//         echo $j . "\n";
//         echo "*";
//     }
//     // echo "*" . "\n";
//     // for ($j=0; $j <= $i; $j++) { 
//     //     echo "*";
//     // }
//     echo "\n";
// }

$scores = [
    [1, 2, 3],
    [5, 6, 7],
];

for ($i=0; $i < count($scores); $i++) { 
    for ($j=0; $j < count($scores[$i]); $j++) { 
        echo "row-{$i} col-{$j} is {$scores[$i][$j]} \n";
    }
}

// echo $scores[0][2];