<?php

// $studens = [{}, {}, {}]

// $object = new Object
// $students = [
//     [
//         "name"  => "student 1",
//         "age"   => 20,
//         "score" => 50
//     ],
//     [
//         "name"  => "student 2",
//         "age"   => 25,
//         "score" => 80
//     ],
//     [
//         "name"  => "student 3",
//         "age"   => 60,
//         "score" => 65
//     ],
// ];

// $scores = [10, 20, 50, 60];
//how to add data to array php
$brands = ['BMW', 'Toyota'];

//add array on last index
array_push($brands, 'Tesla', 'Honda');
//delete 1 value from last array
// array_pop($brands);
//delete 1 value from first array
// array_shift($brands);
//add array on first index
array_unshift($brands, 'Suzuki');
$newBrand = ['Bismilah', 'Alhamdulilah'];

$result = array_merge($brands, $newBrand);
print_r($result);