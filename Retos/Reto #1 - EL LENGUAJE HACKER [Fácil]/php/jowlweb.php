<?php

/*
 * Escribe un programa que reciba un texto y transforme lenguaje natural a
 * "lenguaje hacker" (conocido realmente como "leet" o "1337"). Este lenguaje
 *  se caracteriza por sustituir caracteres alfanuméricos.
 * - Utiliza esta tabla (https://www.gamehouse.com/blog/leet-speak-cheat-sheet/) 
 *   con el alfabeto y los números en "leet".
 *   (Usa la primera opción de cada transformación. Por ejemplo "4" para la "a")
 */

$alfleet = [
    'A' => '4',
    'B' => 'I3',
    'C' => '[',
    'D' => ')',
    'E' => '3',
    'F' => '|=',
    'G' => '&',
    'H' => '#',
    'I' => '1',
    'J' => ',_|',
    'K' => '>|',
    'L' => '1',
    'M' => '/V\\',
    'N' => 'И',
    'O' => '0',
    'P' => '|o',
    'Q' => '(_,)',
    'R' => 'I2',
    'S' => '$',
    'T' => '7',
    'U' => 'µ',
    'V' => '\/',
    'W' => '\X/',
    'X' => 'Ж',
    'Y' => 'Ч',
    'Z' => '>_',
    '1' => 'L',
    '2' => 'R',
    '3' => 'E',
    '4' => 'A',
    '5' => 'S',
    '6' => 'b',
    '7' => 'T',
    '8' => 'B',
    '9' => 'g',
    '0' => '()',
    '_' => " "
];

function convertleet($string, $alfleet) 
{

$string = str_replace(" ", "_", $string);
$string = strtoupper($string);
$len = strlen($string);
$stringleetr = "";
$stringleet = "";

for ($i=0; $i < $len; $i++)
{       
        if ( $stringleetr != "" ) {
            $arraytemp = [$i => $alfleet[$string[$i]]];
            $stringleet = $stringleetr + $arraytemp;
            $stringleetr = $stringleet;
            continue;
        }
        else {
            $stringleetr = [$i => $alfleet[$string[$i]]];
        }
}

return implode($stringleet);

}

$string = "Prueba lenguaje hacker";
$stringleet = convertleet($string, $alfleet);
echo $stringleet;
