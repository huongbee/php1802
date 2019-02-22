<?php
// for($i=1; $i<=10; $i++){
//     echo $i.' ';
// }

$arr = array('Nguyen', 'Van', 'Ngoc');
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];
$count = count($arr); //3
for($i=1; $i <= $count; $i++){
    echo $arr[$i-1].' ';
}

// for($i=0; $i < $count; $i++){
//     echo $arr[$i].' ';
// }
// for($i=0; $i<=$count-1; $i++){
//     echo $arr[$i].' ';
// }
/**
 * i = 0; 0<=2; 
 * echo $arr[0];
 * i++ => i=1
 * 
 * i=1;1<=2;
 * echo $arr[1];
 * i++ 
 * 
 * ...
 */

?>