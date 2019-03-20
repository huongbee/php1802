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

// function sum(int ...$arr):float{
//     return array_sum($arr);
// }
// echo sum(3,5,4,5,7,6,7,3,6,5.5);

// function sum($count,int ...$arr):float{
//     return $count = count($arr);
//     // return array_sum($arr);
// }
// $count = 0;
// $count = sum($count,5,4,5,7,6,7,3,6);
// echo $count;

// function sum($count,int ...$arr):array{
//     $count = count($arr);
//     $tong = array_sum($arr);
//     return [
//         'count'=>$count,
//         'tong'=>$tong
//     ];
// }
// $count = 0;
// $data = sum($count,5,4,5,7,6,7,3,6);
// print_r($data);

function sum(&$count,int ...$arr):float{
    $count = count($arr);
    $tong = array_sum($arr);
    return $tong;
}
$dem = 0;
$tong = sum($dem,5,4,5,7,6,7,3,6);
echo $dem;

?>