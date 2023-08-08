<?php

// $studens = [
//     [
//         "name"  => "student 1",
//         "score" => 50
//     ],
//     [
//         "name"  => "student 2",
//         "score" => 80
//     ],
//     [
//         "name"  => "student 3",
//         "score" => 65
//     ]
// ];

// function naik_kelas($student) {
//     if ($student['score'] < 65) {
//         echo "Harus mengulang";
//         return;
//     }

//     echo "Kamu lulus";
// }

// function say_hello($name) {
//     echo "Hello {$name}";
// }

// function perkalian($num1, $num2) {
//     $result = $num1 * $num2;

//     return $result;
// }

// // say_hello("Edwin");

// $testPerkalian = perkalian(3, 5);

// echo $testPerkalian;
function countDiscount($total) {
    //rule of discount
    $discount = 0;
    if ($total >= 5000 && $total <= 10000) {
        $discount = 1000;
    } else if ($total >= 10000) {
        $discount = 3000;
    }

    return $discount;
}

$belanjas = [2000, 3000, 7000, 80000];

foreach ($belanjas as $belanja) {
    $discount = countDiscount($belanja);
    $total = $belanja - $discount;
    echo "Total belanja anda {$belanja} and mendapatkan discoutn {$discount} total akhir anda {$total} \n";
}
// foreach ($belanjas as $belanja) {
//     $discount = 0;
//     if ($total >= 5000 && $total <= 10000) {
//         $discount = 1000;
//     } else if ($total >= 10000) {
//         $discount = 3000;
//     }
//     $total = $belanja - $discount;
//     echo "Total belanja anda {$belanja} and mendapatkan discoutn {$discount} total akhir anda {$total} \n";
// }




