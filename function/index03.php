<?php

// function sum(float $a, float $b):float{
//     return $a+$b; //output
// }
// echo sum(3,5);

// (3+5)*6/2

// echo sum(3,5,4,5,7,6,7,3);

// function sum(array $arr):float{
//     return array_sum($arr);
//     // $tong = 0;
//     // foreach($arr as $item){
//     //     $tong+=$item;
//     // }
//     // return $tong;
// }
// echo sum([3,5,4,5,7,6,7,3]);

function sum(int ...$arr):float{
    return array_sum($arr);
}
echo sum(3,5,4,5,7,6,7,3,6,5.5);


?>