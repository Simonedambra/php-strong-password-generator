<?php

$passarray = [
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
    ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z', 'x', 'w', 'y', 'k', 'j'],
    ['!', '$', '£', '%', '?', '/', '&'],
    ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'Z', 'X', 'W', 'Y', 'K', 'J']
];

y
// controllo i get in entrata e se passwordL è presente lo assegno come valore alla variabile $passwordL
$passwordL = $_GET['passwordL'];



function gen($passarray, $passwordL)
{
    // assegnazione di valori base per poter rappresentare anche il caso di checkbox non selezionati
    $checkL = 1;
    $checkN = 2;
    $checkC = 3;
    $checkM = 4;


    // controllo per eventuali check selezionati tramite il get
    // nel caso uno di questi valori sia disconibile entro nell'istrizione
    if ($_GET['numeri'] || $_GET['lettere'] || $_GET['caratteri'] || $_GET['maiuscole']) {



        // constrollo ogni campo se è presente nelle informazioni in entrata assegno ad una variabile 
        // il suo valore se cosi non fosse assegno ad esso un valore che dia risultato negativo 

        if ($_GET['lettere']) {
            $checkL = intval($_GET['lettere']);
        } else {

            // al if nel ciclo while non permettera di entrare nella condizione

            $checkL = 10;
            
        }

        if ($_GET['caratteri']) {
            $checkC = intval($_GET['caratteri']);
        } else { 

            // al if nel ciclo while non permettera di entrare nella condizione

            $checkC = 10;
        }

        if ($_GET['numeri']) {
            $checkN = intval($_GET['numeri']);
        } else {
             
            // al if nel ciclo while non permettera di entrare nella condizione

            $checkN = 10;
        }
        if ($_GET['maiuscole']) {
            $checkM = intval($_GET['maiuscole']);
        } else {
             
            // al if nel ciclo while non permettera di entrare nella condizione

            $checkM = 10;
        }
    }

    // assegno a $i =0
    $i = 0;
    while ($i < $passwordL) {

// con questo ciclo prendo come quantità di volte per cui ripeterlo la variabile $passwordL

// numero random per prendere un array nei 4 presenti in modo casuale
        $randnamber = rand(0, 3);

// array sul quale inseriro il dato singolo
        $arraynum = [];


        // per ogni ciclo while che si ripete controllo se la variabile non sia di valore 10 ma ben si il valore passato dal get
        if ($checkN === 2) {

            // se la variabile $checkN è uguale a 2 entro nel ciclo e a questo punto controllo se il primo 
            // numero random sia uguale all' indice dell array di NUMERI quindi 0
            if ($randnamber === 0) {
                // se anche questo valore è uguale entro nella condizione

                // passo all'array $arrayn come valore l'array padre nella posizione l'index che ci ha fatto entrare nella condizione
                $arrayn = $passarray[$randnamber];

                // genero un numero random che vada da 0 alla lunghezza dell'array -1
                // con questo numero ora posso prendere in modo randomico ogni singolo valore dall'array 
                $randomnum = rand(0, 9);

                // prendo l'array sul quale devo inserire i valori e assegno l'array $arrayn in
                //  posizione index randomico da 0 a 9 con variabile $randomnum
                $arraynum = $arrayn[$randomnum];

                // ora aumento la variabile $i di 1 per evitare cicli infiniti
                $i++;
            }
        }

        // per ogni ciclo while che si ripete controllo se la variabile non sia di valore 10 ma ben si il valore passato dal get
        if ($checkL === 1) {
            // se la variabile $checkL è uguale a 1 entro nel ciclo e a questo punto controllo se il primo 
            // numero random sia uguale all' indice dell array di LETTERE quindi 1
            if ($randnamber === 1) {
                // se anche questo valore è uguale entro nella condizione

                // passo all'array $arrayn come valore l'array padre nella posizione l'index che ci ha fatto entrare nella condizione
                $arrayn = $passarray[$randnamber];

                // genero un numero random che vada da 0 alla lunghezza dell'array -1
                // con questo numero ora posso prendere in modo randomico ogni singolo valore dall'array 
                $randomnum = rand(0, 25);

                // prendo l'array sul quale devo inserire i valori e assegno l'array $arrayn in
                //  posizione index randomico da 0 a 25 con variabile $randomnum
                $arraynum =  $arrayn[$randomnum];

                // ora aumento la variabile $i di 1 per evitare cicli infiniti
                $i++;
            }
        }
        // per ogni ciclo while che si ripete controllo se la variabile non sia di valore 10 ma ben si il valore passato dal get
        if ($checkC === 3) {
            // se la variabile $checkC è uguale a 3 entro nel ciclo e a questo punto controllo se il primo 
            // numero random sia uguale all' indice dell array di CARATTERI SPECIALI quindi 3
            if ($randnamber === 2) {
                // se anche questo valore è uguale entro nella condizione

                // passo all'array $arrayn come valore l'array padre nella posizione l'index che ci ha fatto entrare nella condizione
                $arrayn = $passarray[$randnamber];
                
                // genero un numero random che vada da 0 alla lunghezza dell'array -1
                // con questo numero ora posso prendere in modo randomico ogni singolo valore dall'array 
                $randomnum = rand(0, 6);
                
                // prendo l'array sul quale devo inserire i valori e assegno l'array $arrayn in
                //  posizione index randomico da 0 a 6 con variabile $randomnum
                $arraynum = $arrayn[$randomnum];
                
                // ora aumento la variabile $i di 1 per evitare cicli infiniti
                $i++;
            }
        }
        // per ogni ciclo while che si ripete controllo se la variabile non sia di valore 10 ma ben si il valore passato dal get
        if ($checkM === 4) {
            // se la variabile $checkM è uguale a 4 entro nel ciclo e a questo punto controllo se il primo 
            // numero random sia uguale all' indice dell array di LETTERE MAIUSCOLE quindi 4
            if ($randnamber === 3) {
                // se anche questo valore è uguale entro nella condizione

                // passo all'array $arrayn come valore l'array padre nella posizione l'index che ci ha fatto entrare nella condizione
                $arrayn = $passarray[$randnamber];
                
                // genero un numero random che vada da 0 alla lunghezza dell'array -1
                // con questo numero ora posso prendere in modo randomico ogni singolo valore dall'array 
                $randomnum = rand(0, 25);
                
                // prendo l'array sul quale devo inserire i valori e assegno l'array $arrayn in
                //  posizione index randomico da 0 a 25 con variabile $randomnum
                $arraynum = $arrayn[$randomnum];
                
                // ora aumento la variabile $i di 1 per evitare cicli infiniti
                $i++;
            }
        }
        // con questa codizione evito di stampare un risultato vuoto nell'campo
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
