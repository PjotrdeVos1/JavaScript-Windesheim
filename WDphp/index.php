<?php

// var_dump($_SERVER['DOCUMENT_ROOT']);

// fakka gangsters vandaag gaan we minecraft spelen

/*
 * Integer
 * Boolean
 * Array
 * Object
 * Float
 * String
 *
*/

$greeting = 'hello';
//  echo $greeting;

//String
$String = 'hello';
echo $String . " ".gettype($String) . '<br>';

//Float
$Float = 10.99;
echo $Float . " ".gettype($Float) . '<br>';

//Integer
$Integer = 2;
echo $Integer . " " .gettype($Integer) . '<br>';

$BigInteger = PHP_INT_MAX;
echo number_format($BigInteger) . " ".gettype($BigInteger) . '<br>';

//Boolean
$Euro = 5;
    if ($Euro > 10) {
        echo 'Rijk';
    } else {
        echo 'Skeer<br>';
    }


    $Fruits = ["Apple" , "Banana", "Pineapple", "Kiwi", "Pear"];

    print_r($Fruits[0]);




    foreach ($Fruits as $fruit) {
        echo $fruit . " " . gettype($fruit) . "<br>";
    }


    //for loop

for ($i = 0; $i < 4; $i++) {
    echo "Die nummer is $i <br>";
}



    //while loop

$kaas = 1;
while ($kaas < 5) {
    echo $kaas . "<br>";
    $kaas++;
}


for ($x = 1; $x <= 5; $x++) {
    echo str_repeat('*', $x) . "<br>";
}



$Hobbies = ["Gym", "Gamen", "Eten", "Coding"];


foreach ($Hobbies as $i) {
    echo "$i <br>";
}
