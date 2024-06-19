<?php

$passarray = [
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
    ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z', 'x', 'w', 'y', 'k', 'j'],
    ['!', '$', '£', '%', '?', '/', '&'],
    ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'Z', 'X', 'W', 'Y', 'K', 'J']
];

$passwordL = $_GET['passwordL'];


function gen($passarray, $passwordL)
{
    for ($i = 0; $i < $passwordL; $i++) {

        $randnamber = rand(0, 3);
        $arrayn = $passarray[$randnamber];
        if ($randnamber === 0) {
            $randomnum = rand(0, 9);
            echo $arrayn[$randomnum];
        } elseif ($randnamber === 1) {
            $randomnum = rand(0, 25);
            echo $arrayn[$randomnum];
        } elseif ($randnamber === 2) {
            $randomnum = rand(0, 6);
            echo $arrayn[$randomnum];
        } elseif ($randnamber === 3) {
            $randomnum = rand(0, 25);
            echo $arrayn[$randomnum];
        }
    }
}

gen($passarray, $passwordL);




// foreach ($arraynew as $key => $number) {
//     var_dump($number);
//     var_dump($key);
// }

// foreach ($passarray as $value) {
//     $randnamber = rand(0, 2);
//     var_dump($value[$randnamber]);
//     $arraynew = ($passarray[$randnamber]);

// if ($randnamber === 0) {

//     for ($i = 0; $i < 1; $i++) {
//         $randomnum = rand(0, 9);
//         echo $arraynew[$randomnum];
//     }
// } elseif ($randnamber === 1) {

//     for ($i = 0; $i < 1; $i++) {
//         $randomnum = rand(0, 9);
//         echo $arraynew[$randomnum];
//     }
// } elseif ($randnamber === 2) {

//     for ($i = 0; $i < 1; $i++) {
//         $randomnum = rand(0, 9);
//         echo $arraynew[$randomnum];
//     }
// }
// }


// function passgen($passarray)
// {
//     foreach ($passarray as $value) {
//         $randnamber = rand(0, 2);
//         $arraynew = $value[$randnamber];
//         var_dump($arraynew);
//     }
// }
