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
    $checkL = 1;
    $checkN = 2;
    $checkC = 3;
    $checkM = 4;
    if ($_GET['numeri'] || $_GET['lettere'] || $_GET['caratteri'] || $_GET['maiuscole']) {
        if ($_GET['lettere']) {
            $checkL = intval($_GET['lettere']);
        } else {
            $checkL = 10;
        }

        if ($_GET['caratteri']) {
            $checkC = intval($_GET['caratteri']);
        } else {
            $checkC = 10;
        }

        if ($_GET['numeri']) {
            $checkN = intval($_GET['numeri']);
        } else {
            $checkN = 10;
        }
        if ($_GET['maiuscole']) {
            $checkM = intval($_GET['maiuscole']);
        } else {
            $checkM = 10;
        }
    }

    $i = 0;
    while ($i < $passwordL) {

        $randnamber = rand(0, 3);

        $arraynum = [];
        if ($checkN === 2) {
            if ($randnamber === 0) {
                $arrayn = $passarray[$randnamber];
                $randomnum = rand(0, 9);
                $arraynum = $arrayn[$randomnum];
                $i++;
            }
        }
        if ($checkL === 1) {
            if ($randnamber === 1) {
                $arrayn = $passarray[$randnamber];
                $randomnum = rand(0, 25);
                $arraynum =  $arrayn[$randomnum];
                $i++;
            }
        }
        if ($checkC === 3) {
            if ($randnamber === 2) {
                $arrayn = $passarray[$randnamber];
                $randomnum = rand(0, 6);
                $arraynum = $arrayn[$randomnum];
                $i++;
            }
        }
        if ($checkM === 4) {
            if ($randnamber === 3) {
                $arrayn = $passarray[$randnamber];
                $randomnum = rand(0, 25);
                $arraynum = $arrayn[$randomnum];
                $i++;
            }
        }
        if ($arraynum) {
            echo $arraynum;
        }
    }
}






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
