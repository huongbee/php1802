<?php

// define('pi',3.14);
// define('pi',3.15);

// $a = 3;
// $a++; ++$a;
// echo ++$a; //4
// echo $a++; //3
// echo $a;//4
// $a++;

// echo $a--;
// echo --$a; // $a = $a-1


// $a = 10;
// $b = 6;
// $a -= 2; // $a = $a - 2 
// $a += $b; // $a = $a - $b
// $a %= $b;   // $a = $a % $b
// echo $a; //4

// $a = 'Chao ban';
// $name = 'Ti';
// $a .= ' '.$name;  // $a = $a . $name;
// echo $a .' '. $name;
// $a .= ' $name';  
// $a .= " $name";  

// echo $a;


// $a = 2;
// // $a = $a*$a;
// // $a = pow($a,4);
// $a = $a**4;

// echo $a;


// $a = 2; //number
// $b = '2'; //string
// if($a != $b){
//     echo 'True';
// }
// else{
//     echo 'False';
// }
// // false

// if($a !== $b){
//     echo 'True';
// }
// else{
//     echo 'False';
// }
//true

$a = 2; //number
$b = '3'; //string

// if($a !== $b){
//     echo 'True';
// }
// else{
//     echo 'False';
// }
// if($a !== $b) echo 'True'; 
// else echo 'False';




// if($a == $b){
//     echo "$a == $b";
// }
// else if($a>$b){
//     echo "$a > $b";
// }
// else{
//     echo "$a < $b";
// }

// $a = 5;
// $b = 8;
// echo $a < $b ? $b : $a;

// echo "Max cua $a va $b la ". ($a < $b ? $b : $a);

// 2 * 2 + 5 = 9
// 2 * (2 + 5) = 2*7 = 
// $s = 'string5';
// echo (int)$s;

$a = 15;
$b = 80;
$c = 60;

// echo ($a > $b ? $a : $b) > $c ? ($a > $b ? $a : $b) : $c;
// $a > $b ? $a : $b = $x 
// $x > $c ? $x : $c

// echo ($a > $b ? $a : $b) > ($b > $c ? $b : $c) ? ($a > $b ? $a : $b) :  ($b > $c ? $b : $c) ;

/**
 * $a > $b ? $a : $b = $x
 * $b > $c ? $b : $c = $y
 * $x > $y ? $x : $y
 */

// if($a > $b and $a > $c) echo $a;
// elseif($a > $b and $b < $c){
//     if($a > $c){
//         echo $a;
//     }
//     else echo $c;
// }
// else echo $b;

$a = 20;
switch($a){
    case 1: echo 'Mot';break;
    case 2: echo 'Hai';break;
    case 3: echo 'Ba';break;
    default: echo $a;
}


?>