<?php

// $arr = [1, 2, 3, 4];
// $arr2 = array('Mot', 'Hai', 'Ba');
// $arr3 = [
//     1, 
//     'Teo', 
//     true, 
//     array(3,5,7)
// ];
$arr4 = [
    'key1'=>2,
    'key2'=>[
        7 , 8, 'Hello'
    ],
    2 => 12
];
$arr4 = array(
    'key1'=>2,
    'key2'=> array(
        7 , 8, 'Hello',
        'key_n'=>'Xin chao'
    ),
    2 => 12
);
print_r($arr4);

$new = $arr4['key2'];
echo $new[2];
print_r($arr4['key2'][2]);
// echo $arr4['key2'];



// echo $arr; // use for string




?>