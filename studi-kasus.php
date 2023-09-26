<?php

// PERHITUNGAN 
 function tambah ($a, $b)
 {

    $c = $a + $b;
   
    return $c;
 }
 echo "10 + 7 = ". tambah (10,7). "<br>";

//  kurang 
 function kurang ($a, $b)
 {

    $c = $a - $b;
   
    return $c;
 }
 echo "10 - 7 = ". kurang (10,7). "<br>";

//  kali

function kali($a, $b)
{
    $c = $a * $b;
    $d = $a ."*". $b . "=" . $c . "<br>";
    return $d;
}

echo kali(5,10);
echo kali(8,10);


// bagi
function bagi($a, $b)
{
    $c = $a / $b;
    $d = $a ."/". $b . "=" . $c . "<br>";
    return $d;
}
echo bagi(20,2);





 
